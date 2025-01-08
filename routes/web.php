<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', ['nama' => 'IrulesDev']);
});
Route::get('/contact', function () {
    return view('contact' , ['nama' => 'IrulesDev']);
});
Route::get('/blog', function () {
    return view('blog');
});
