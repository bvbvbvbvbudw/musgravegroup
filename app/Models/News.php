<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'url', 'category', 'small_description', 'is_popular', 'media_id'
    ];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function content()
    {
        return $this->hasOne(NewsContent::class);
    }
}
