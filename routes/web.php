<?php

use App\Http\Controllers\authenticateLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('registro', function () {
    return view('register');
});

Route::get('lista', function () {
    return view('list');
});

Route::post('/', [authenticateLogin::class,'authenticate'])->name("login_post");