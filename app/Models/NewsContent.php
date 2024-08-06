<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsContent extends Model
{
    use HasFactory;

    protected $fillable = ['news_id', 'news_sustainability_id', 'content', 'is_standard'];

    public function news()
    {
        return $this->belongsTo(News::class);
    }

    public function newsSustainability()
    {
        return $this->belongsTo(NewsSustainability::class);
    }
}
