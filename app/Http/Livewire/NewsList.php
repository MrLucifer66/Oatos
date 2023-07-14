<?php 
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;

class NewsList extends Component
{
    public $searchTerm;
    public function render()
    {
        $news = News::orderByDesc('created_at')->latest()->get();
        return view('livewire.news-list', compact('news'));
    }
}