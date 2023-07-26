<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Tag;
use App\Models\Marquee;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderByDesc('created_at')
            ->latest()
            ->paginate(10);

        return view('news.index', compact('news'));
    }
    public function welcome()
{
    $marqueeText = Marquee::pluck('text')->first();
    $news = News::orderByDesc('created_at')
        ->latest()
        ->paginate(10);

    return view('welcome', compact('news', 'marqueeText'));
}

    public function show($id)
    {
        $news = News::findOrFail($id);

        return view('news.show', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'summary' => 'required|string',
        'image' => 'nullable|image|max:2048',
        'tags' => 'array',
    ]);

    $news = new News;

    $news->title = $validatedData['title'];
    $news->content = $validatedData['content'];
    $news->summary = $validatedData['summary'];
    $news->region = 'federation';

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $news->image = $imageName;
    }

    $news->save();

    $tags = $request->input('tags');
    $hiddenTags = $request->input('hidden-tags');
    $tags = json_decode($hiddenTags, true);
    
    if ($tags) {
        $tagIds = [];
        
        foreach ($tags as $tagName) {
            if (!empty($tagName)) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
        }
        
        $news->tags()->sync($tagIds);
    }
    

    return redirect()->route('news.show', $news->id);
}

    public function edit($id)
    {
        $news = News::findOrFail($id);

        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'summary' => 'required|string',
        'image' => 'nullable|image|max:2048',
        'tags' => 'array',
    ]);

    $news = News::findOrFail($id);

    $news->fill($validatedData);
    $news->region = 'federation';

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $news->image = $imageName;
    }

    $news->save();

    $tags = $request->input('tags');

    if ($tags) {
        $tagIds = [];
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $tagIds[] = $tag->id;
        }
        $news->tags()->sync($tagIds);
    } else {
        $news->tags()->detach();
    }

    return redirect()->route('news.show', $news->id);
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
            ->paginate(10);

        return view('news.search', compact('news'));
    }
}