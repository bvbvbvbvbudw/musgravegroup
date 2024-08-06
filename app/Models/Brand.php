<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'small_description',
        'url',
        'media_logo_id',
        'media_bg_id'
    ];

    public function logo()
    {
        return $this->belongsTo(Media::class, 'media_logo_id');
    }

    public function bg()
    {
        return $this->belongsTo(Media::class, 'media_bg_id');
    }

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
