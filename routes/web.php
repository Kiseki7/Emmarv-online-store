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
    return view('front.components.home');
});

Route::get('/about', function () {
    return view('front.components.about');
});

Route::get('/services', function () {
    return view('front.components.services');
});

Route::get('/contact', function () {
    return view('front.components.contact');
});

Route::get('/dashboard', function () {
    return view('back.components.dasboard');
});
