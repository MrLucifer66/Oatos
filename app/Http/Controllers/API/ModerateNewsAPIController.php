<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ModerateNews;
use App\Http\Controllers\Controller;

class ModerateNewsAPIController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->only(['title', 'content', 'summary', 'region']);
    
        // Проверяем заполнение обязательных полей
        if (empty($input['title']) || empty($input['content']) || empty($input['summary']) || empty($input['region'])) {
            return response()->json(['error' => 'Missing or invalid fields'], 422);
        }
    
        $news = new ModerateNews;
        $news->title = $input['title'];
        $news->content = $input['content'];
        $news->summary = $input['summary'];
        $news->region = $input['region'];
    
        // Если загружаем изображение, сохраняем его и записываем путь в базу данных
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $news->image = str_replace('public/', 'storage/', $path);
        }
    
        $news->save();
            
        return response()->json(['message' => 'News has been added'], 201);
    }
}