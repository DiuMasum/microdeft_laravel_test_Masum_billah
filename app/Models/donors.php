<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'blood_group_id',
        'last_donation_date',
        'total_donation_count',
    ];
}
