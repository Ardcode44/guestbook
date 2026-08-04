<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'name',
        'position',
    ];  
    public function employee():belongsTo
    {
        return $this->belongsTo(Employee::class, 'employe_id');
    }
}
