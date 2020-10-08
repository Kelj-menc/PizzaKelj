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

        $student = new Student();

        $student->name =request('name', "");
        $student->grade =request('grade');
        $student->about_student =request('about_student', "");
        $student->used_comments ="";
        $student->gender =request('gender', "Others");
        $student->categories =request('categories', "");

        $student->save();
        // add mssge  to the user about new student creation aftr ->
        return redirect('/students')->with('mssg', 'NOTES! You add a new student into your students list - '.$student->name);
    }

    public function destroy($id){
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect('/students');
    }


}
