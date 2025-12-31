<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('/about', 'pages.about-us');
Route::view('/blog', 'pages.blog');
Route::view('/contact', 'pages.contact');

