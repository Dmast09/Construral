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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/aboutus',function(){
    return view('aboutus');
});

Route::get('/mongodb', function(){
    return view('mongodb');
});

Route::get('projects/index',function(){
    return view('projects/index');
});

Route::get('projects/create',function(){
    return view('projects/create');
});

Route::get('/prueba',function(){
    return view('prueba');
});

Route::get('/projects',function(){
    return view('projects');
});