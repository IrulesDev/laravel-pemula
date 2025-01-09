<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['nama' => 'IrulesDev', 'title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact' , [ 'title' => 'Contact']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'blog']);
});
