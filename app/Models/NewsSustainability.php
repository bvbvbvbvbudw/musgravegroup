<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsSustainability extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'url', 'category_id', 'small_description', 'media_id'
    ];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function content()
    {
        return $this->hasOne(NewsContent::class, 'news_sustainability_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
