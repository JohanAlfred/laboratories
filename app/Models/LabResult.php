<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'appointment_id', 'test_id', 'result'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
