<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $students=[
                ['name'=>'Ce Dung', 'grade'=>'1', 'price'=>'3$'],
                ['name'=>'su ming', 'grade'=>'2', 'price'=>'15$'],
                ['name'=>'Li fungru mti', 'grade'=>'4', 'price'=>'80$'],
                ['name'=>'Če Ge Va Ra', 'grade'=>'5', 'price'=>'8000$']               
            ];

    return view('dashboard', ['students' => $students]);

    //ako hocesh da return samo text neki na page probaj ovo
    //return 'returniram text';
    //ako hocesh da return json format laravel ce da skonta da ovaj array vrati kao json
    //return ['name'=>'Keljmenc', 'pas'=>'charley'];
});
