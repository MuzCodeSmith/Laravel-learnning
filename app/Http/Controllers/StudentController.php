<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudents(){
        $students = App\Models\Student::all();
        return $students;
    }
}
