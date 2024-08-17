<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'category'
    ];
}
