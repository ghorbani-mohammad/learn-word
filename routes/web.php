<?php

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

// dd("Hello");

Route::get('/', function () {
    return view('practise');
});


Route::get('lookup',function(){
    return view('lookup');
});

Route::get('practise',function(){
    return view('practise');
});

