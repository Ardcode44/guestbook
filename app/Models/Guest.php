<?php

namespace App\Models;

use hasFactory
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'address',
        'company',
        'employee_id',
        'purpose',
        'email',
    ];
}
