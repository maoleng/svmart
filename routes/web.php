<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/detail.html', function () {
    return view('detail');
});

Route::get('/login.html', function () {
    return view('login');
});

Route::get('/register.html', function () {
    return view('register');
});

Route::get('/shop.html', function () {
    return view('shop');
});
