<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClientController;

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

Route::get('/students',[StudentController::class,'getStudents']);

Route::get('/clients',[ClientController::class,'getClients']);
Route::view('/add','add-client');
Route::post('/add',[ClientController::class,'addClients']);
Route::get('/delete/{id}',[ClientController::class,'deleteClient']);

Route::view('/','welcome');