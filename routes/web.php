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
    return view('layout.beranda');
});

Route::get('/rumahtangga', function () {
    return view('layout.rumahtangga');
});

Route::get('/mandi', function () {
    return view('layout.mandi');
});

Route::get('/tidur', function () {
    return view('layout.tidur');
});

Route::get('/semuaproduk', function () {
    return view('layout.semuaproduk');
});

Route::get('/service', function () {
    return view('layout.service');
});

Route::get('/rumahtangga/rumahtangga1', function () {
    return view('layout.rumahtangga1');
});




