<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'title',
        'type',
        'location_id',
        'contract_type',
        'end_date',
        'is_closed',
        'category_id',
        'content_id', 'status'
    ];

    public function content()
    {
        return $this->belongsTo(VacancyContent::class);
    }

    public function category()
    {
        return $this->belongsTo(VacancyCategory::class);
    }

    public function location()
    {
        return $this->belongsTo(VacancyLocation::class);
    }
}
