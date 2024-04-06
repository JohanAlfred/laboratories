<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;
    protected $table = 'technician';

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
