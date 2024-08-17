<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSender extends Model
{
    use HasFactory;
    protected $table = 'users_senders';

    protected $fillable = [
        'title',
        'forenames',
        'surname',
        'telephone',
        'email',
        'preferred_categories',
        'preferred_locations',
    ];

    protected $casts = [
        'preferred_categories' => 'array',
        'preferred_locations' => 'array',
    ];
}
