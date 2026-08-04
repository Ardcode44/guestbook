<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use hasFactory;
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
