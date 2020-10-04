<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index(){
        //$students = Student::all();
        //$students = Student::where('grade', 4)->get();
        $students = Student::latest()->get();
      
        
        return view('dashboard', [
                                    'students' => $students,
                                    //ova dole dva su opciona blah
                                    //ali ako ih obrises morash i u view
                                    'name' => request('name'),
                                    'age' => request('age'),                                
                                ]);

    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
