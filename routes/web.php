<?php

use App\Models\Leson;
use Illuminate\Support\Facades\Route;

$data = Leson::all();
Route::get('/', function () use ($data) {
    return view('welcome',compact('data'));
});
