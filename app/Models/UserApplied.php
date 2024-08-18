<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApplied extends Model
{
    use HasFactory;
    protected $table = "users_applied";

    protected $fillable = [
        'title',
        'first_name',
        'surname',
        'address_line_1',
        'address_line_2',
        'town',
        'country',
        'postcode',
        'dial_code',
        'phone',
        'email',
        'is_over_16',
        'is_eligible_to_work_in_eu',
        'eligibility_details',
        'has_criminal_convictions',
        'conviction_details',
        'role_advertised_source',
    ];

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
