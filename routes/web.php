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
// Route::get('/about/{name}', function ($name) {
//     echo $name;
//     return view('about',['name'=>$name]);
// });

Route::get('/contact', function(){
    return view('contact');
});

Route::view('/admin/{name}','admin');

Route::get('/user',[UserController::class,'getUsers']);
Route::get('/userDetails/{user}',[UserController::class,'getUserDetails']);


Route::view('/','welcome');