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
        'location',
        'contract_type',
        'end_date',
        'is_closed',
        'content_id'
    ];

    public function content()
    {
        return $this->belongsTo(VacancyContent::class);
    }
}
