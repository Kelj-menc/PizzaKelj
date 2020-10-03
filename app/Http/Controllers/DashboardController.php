<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
            $students=[
                ['nameUcenika'=>'Ce Dung', 'grade'=>'1', 'price'=>'3$'],
                ['nameUcenika'=>'su ming', 'grade'=>'2', 'price'=>'15$'],
                ['nameUcenika'=>'Li fungru mti', 'grade'=>'4', 'price'=>'80$'],
                ['nameUcenika'=>'Če Ge Va Ra', 'grade'=>'5', 'price'=>'8000$']               
            ];          
        
        return view('dashboard', [
                                    'students' => $students,
                                    'name' => request('name'),
                                    'age' => request('age'),                                
                                ]);

    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
