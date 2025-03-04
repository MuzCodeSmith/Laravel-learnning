<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function(){
    return view('contact');
});

Route::view('/admin/{name}','admin');
Route::get('/users',[UserController::class,'users']);



Route::view('/','welcome');