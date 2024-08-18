<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerForm extends Model
{
    use HasFactory;
    protected $table = "career_form";
    public $timestamps = false;
    protected $fillable = [
        'name_product',
        'company_name',
        'address_line_1',
        'address_line_2',
        'town',
        'county',
        'postcode',
        'dial_code',
        'phone',
        'email',
        'product_name',
        'description_product',
        'description_business',
    ];
}
