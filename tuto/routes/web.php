<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');
Route::view('/services', 'landing.services')->name('services');
Route::view('/contact', 'landing.contact')->name('contact');
