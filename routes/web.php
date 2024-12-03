<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kontak', [App\Http\Controllers\HomeController::class, 'kontak'])->name('kontak');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');

