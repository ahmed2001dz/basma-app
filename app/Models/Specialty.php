<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable = [
        'code',
        'name_ar',
        'name_en',
        'branch',
        'level',
        'duration_months',
        'is_active'
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
