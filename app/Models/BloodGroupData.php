<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodGroupData extends Model
{
    use HasFactory;
    protected $fillable = [
        'group',
    ];
}
