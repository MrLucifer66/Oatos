<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModerateNews;
use App\Models\News;
use Carbon\Carbon;

class ProposedNewsController extends Controller
{
    public function show($id) 
    { 
        $proposedNews = ModerateNews::findOrFail($id);
        return view('proposed-news.show', compact('proposedNews')); 
    }

    public function index()
    {
        $proposedNews = ModerateNews::all();

        return view('proposed-news.index', compact('proposedNews'));
    }

    public function edit(ModerateNews $proposedNews)
    {
        return view('proposed-news.edit', compact('proposedNews'));
    }

    public function update(Request $request, ModerateNews $proposedNews)
    {
        $proposedNews->update($request->all());

        return redirect()->route('proposed-news');
    }

    public function publish(Request $request, ModerateNews $proposedNews)
{
    $news = News::create([
        'title' => $proposedNews->title,
        'content' => $proposedNews->content,
        'summary' => $proposedNews->summary,
        'img' => $proposedNews->img,
        'author_id' => auth()->id(),
        'published_at' => Carbon::now(),
        'moderate_news_id' => $proposedNews->id, // указываем ID связанной новости, чтобы переместить ее из таблицы moderate_news в таблицу news
    ]);

    $proposedNews->delete();

    return redirect()->route('proposed-news');
    }
    public function create(ModerateNews $proposedNews)
    {
        return view('news.create', compact('proposedNews'));
    }

    public function store(Request $request, ModerateNews $proposedNews)
    {
        $news = News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'summary' => $request->input('summary'),
            'img' => $request->hasFile('img') ? $request->file('img')->store('public/images') : null,
            'author_id' => auth()->user()->id,
            'published_at' => Carbon::now(),
        ]);

        $proposedNews->delete();

        return redirect()->route('proposed-news.show', $news->id);
    }


    public function destroy(ModerateNews $proposedNews)
    {
        $proposedNews->delete();

        return redirect()->route('proposed-news');
    }
}