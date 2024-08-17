<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'spotify',
        'apple',
        'buzz',
        'content',
        'small_description',
        'media_id',
        'status'
    ];
    public function media()
    {
        return $this->belongsTo(Media::class);
    }

}
