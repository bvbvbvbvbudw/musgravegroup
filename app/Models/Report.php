<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_id',
        'media_id',
        'title'
    ];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
