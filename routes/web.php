<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', fn() => view('pages/home'))->name('home');

// Route::get('/about-us', fn() => view('pages/about'))->name('about');

Route::view('/', 'pages/home')->name('home');
Route::view('/about-us', 'pages/about')->name('about');



