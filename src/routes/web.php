<?php

use Illuminate\Support\Facades\Route;
//lo hemos comentado para visualizar nuestro home
// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');