<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $fillable = [
        'appointment_no', 'card_no', 'patient_id', 'price', 'expdate', 'cvv'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_no');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
