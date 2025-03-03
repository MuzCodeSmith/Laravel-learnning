<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUsers(){
        // return "All Users Data";
        return view('about');
    }

    function getUserDetails($user){
        return "$user's Details";
    }
}
