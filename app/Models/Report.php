<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file_id',
        'media_id',
        'status'
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
