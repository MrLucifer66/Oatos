<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModerateNews extends Model
{
    use HasFactory;
    protected $table = 'moderate_news';

    protected $fillable = [
        'title',
        'content',
        'summary',
        'image',
        'region',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}