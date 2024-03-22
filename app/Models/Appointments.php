<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = [
        'testtid', 'patientid', 'date', 'time', 'status'
    ];

    public function test()
    {
        return $this->belongsTo(Test::class, 'testtid');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patientid');
    }
}
