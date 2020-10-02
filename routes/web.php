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

    $student=['name'=>'Ce Dung', 'grade'=>'4', 'price'=>'11$'];
    return view('dashboard', $student);

    //ako hocesh da return samo text neki na page probaj ovo
    //return 'returniram text';
    //ako hocesh da return json format laravel ce da skonta da ovaj array vrati kao json
    //return ['name'=>'Keljmenc', 'pas'=>'charley'];
});
