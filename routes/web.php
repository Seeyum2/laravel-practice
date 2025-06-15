<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// redirect form one page to another
// route::redirect('/home', '/');

// assping parameter 
Route::get('/about/{name}', function ($name) {
    return view('about', ['name'=>$name]);
});



// best practice for calling controller
Route::get('test', [HomeController::class, 'test']);


// Route::get('test', 'App\Http\Controllers\HomeController@test');
