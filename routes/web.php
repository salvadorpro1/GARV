<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\authenticateLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('registro', function () {
    return view('register');
})->middleware('auth');

Route::get('lista', function () {
    return view('list');
})->middleware('auth');;

Route::post('/', [authenticateLogin::class, 'authenticate'])->name("login_post");
