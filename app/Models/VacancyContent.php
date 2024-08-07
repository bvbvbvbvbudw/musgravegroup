<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyContent extends Model
{
    use HasFactory;
    protected $table = 'vacancies_content';
    public $timestamps = false;
    protected $fillable = [
        'content'
    ];
}
