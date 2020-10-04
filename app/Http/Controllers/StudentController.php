<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        //$students = Student::all();
        //$students = Student::where('grade', 4)->get();
        $students = Student::latest()->get();
      
        
        return view('students.index', ['students' => $students]);

    }

    public function show($id){
        return view('students.show', ['id' => $id]);
    }

    public function create(){

        return view('students.create');
    }
}
