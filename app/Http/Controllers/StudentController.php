<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
        $data = Student::all();

        return view('student.student', ['students' => $data]);
    }
}
