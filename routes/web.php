<?php

use App\Http\Controllers\registerSending;
use App\Http\Controllers\authenticateLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitanteController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('registro', function () {
    return view('register');
})->middleware('auth')->name('registro');

Route::get('/lista', [VisitanteController::class, 'index'])->middleware('auth')->name('lista');

Route::post('/', [authenticateLogin::class, 'authenticate'])->name("login_post");

Route::post('logout', [authenticateLogin::class, 'logout'])->name('logout');

Route::post('registro', [registerSending::class, 'register'])->name('registro_post');
