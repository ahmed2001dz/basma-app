<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'birth_date',
        'birth_place',
        'gender',
        'address',
        'phone_number',
        'email',
        'nin',
        'registration_number',
        'specialty_id',
        'level',
        'wilaya_id',
        'commune_id'
    ];

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}
