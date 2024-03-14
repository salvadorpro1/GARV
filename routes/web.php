<?php

use App\Http\Controllers\registerSending;
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

Route::post('logout', [authenticateLogin::class, 'logout'])->name('logout');

Route::post('registro', [registerSending::class, 'register'])->name('registro_post');
