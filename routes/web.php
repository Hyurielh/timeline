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

Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('register', function(){
    return view('register');
})->name('register');

Route::get('help', function(){
    return view('help');
})->name('help');

Route::get('user', function(){
    return view ('user');
})->name ('user');