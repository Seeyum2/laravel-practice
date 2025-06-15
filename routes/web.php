<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 

Route::get('/', function () {
    return view('home');
});

Route::get('test', [HomeController::class, 'test']);


// Route::get('test', 'App\Http\Controllers\HomeController@test');
