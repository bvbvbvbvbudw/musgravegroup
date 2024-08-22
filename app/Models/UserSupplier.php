<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSupplier extends Model
{
    use HasFactory;
    protected $table = 'users_supplier';
    protected $fillable = [
        'brand_name',
        'company_name',
        'business_address',
        'phone',
        'name',
        'email',
        'is_contact',
        'tell_about',
        'payment_type',
        'product_name',
        'product_type',
        'description_few',
        'manufacturing_your_product',
        'product_made',
        'market_place',
        'products_similar',
        'product_fit',
        'additional_comment',
    ];
}
