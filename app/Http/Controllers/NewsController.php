<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        // Вывод списка новостей
        $news = News::orderByDesc('created_at')->latest()->paginate(10);
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        // Вывод страницы показа деталей новости
        $news = News::find($id);
        return view('news.show', compact('news'));
    }

    public function create()
    {
        // Вывод формы добавления новости
        return view('news.create');
    }

    public function edit($id)
{
    $news = News::findOrFail($id);

    return view('news.edit', compact('news'));
}

public function update(Request $request, $id)
{
    $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'summary' => 'required',
        'image' => 'nullable|image|max:2048'
    ]);

    $news = News::findOrFail($id);

    $news->title = $request->title;
    $news->content = $request->content;
    $news->summary = $request->summary;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $news->image = $imageName;
    }

    $news->update();

    return redirect()->route('news.show', $id);
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('news.index');
    }
    public function search(Request $request)
    {
        $query = $request->input('q');

        $news = News::query()
            ->where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->get();

        return view('news.search', compact('news', 'query'));
    }

    

    public function store(Request $request)
    {
        // Валидация переданных данных
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'summary' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Сохранение новости в базу данных
        $news = new News();
        $news->title = $validatedData['title'];
        $news->content = $validatedData['content'];
        $news->summary = $validatedData['summary'];
        $news->author_id = 1;
        $news->created_at;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $news->image = $imageName;
        }
    
        $news->save();
    
        return redirect()->route('news.show', ['id' => $news->id]);
    }
}