<?php

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use App\Models\News;
use Symfony\Component\DomCrawler\Crawler;

$xml_url = 'https://oatos.ru/rss-feed-950815266191.xml';

$client = new Client();
$guzzle_params = [
    'http_errors' => false,
    'verify' => false,
];

// загружаем и парсим XML-файл
$response = $client->get($xml_url, $guzzle_params);
$xml_string = $response->getBody();
$xml_string = str_replace('&nbsp;', ' ', $xml_string); // заменяем &nbsp; на пробел
$xml = simplexml_load_string($xml_string, 'SimpleXMLElement', LIBXML_NOENT);

// итерируемся по элементам RSS-ленты
foreach ($xml->channel->item as $item) {
    $title = (string) $item->title;
    $summary = (string) $item->description;
    $content = '';
    // получаем контент статьи из тегов <turbo:content>
    $turbo_content = $item->children('http://turbo.yandex.ru')->content;
    $crawler = new Crawler($turbo_content);
    $header = $crawler->filter('header');
    if ($header->count() > 0) {
        $header->each(function (Crawler $headerNode) {
            $headerNode->getNode(0)->parentNode->removeChild($headerNode->getNode(0));
        });
    }
    $content = $crawler->html();
    // получаем адрес изображения
    $image = '';
    $image_node = $crawler->filter('img')->first();
    if ($image_node->count() > 0) {
        $image_url = $image_node->attr('src');
        $image_ext = pathinfo($image_url, PATHINFO_EXTENSION);
        $image_filename = Str::random(20) . '.' . $image_ext; // уникальное имя файла
        $image_path = public_path('storage/news/' . $image_filename);
        $image_data = file_get_contents($image_url);
        file_put_contents($image_path, $image_data);
        $image = $image_filename; // сохраняем только имя файла
        // удаляем первую фотографию из контента
        $image_node->getNode(0)->parentNode->removeChild($image_node->getNode(0));
    }
    // получаем дату публикации новости из тега pubDate
    $date = date_create_from_format('D, d M Y H:i:s O', (string) $item->pubDate);
    $pub_date = $date->format('Y-m-d H:i:s');

    // сохраняем новость в базу данных
    $news = new News();
    $news->title = $title;
    $news->summary = $summary;
    $news->content = $content;
    $news->author_id = 1;
    $news->created_at = $pub_date; // устанавливаем дату публикации
    if ($image) {
        $news->image = $image; // сохраняем только имя файла
    }
    $news->save();
} 