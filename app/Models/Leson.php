<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leson extends Model
{
    protected $fillable = [
        'title',
        'type',
        'category',
        'content',
    ];
}
