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

        $student  = Student::findOrFail($id);
        return view('students.show', ['student' => $student]);
    }

    public function create(){
       
        return view('students.create');
    }

    public function store(){
        error_log(request('name'));
        error_log(request('grade'));
        error_log(request('note'));
        return redirect('/');
    }
}
