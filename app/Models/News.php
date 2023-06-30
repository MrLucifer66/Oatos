<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'content',
        'summary',
        'image',
        'author_id',
        'published_at'
    ];

    /**
     * Получить путь к изображению новости.
     *
     * @return string|void
     */
    public function getImagePathAttribute()
    {
        if ($this->attributes['image']) {
            return asset('images/' . $this->attributes['image']);
        }

        return;
    }

    /**
     * Определить отношение между новостью и автором (пользователем).
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function moderateNews()
    {
        return $this->belongsTo(ModerateNews::class);
    }
}