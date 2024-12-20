<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kontak', [App\Http\Controllers\HomeController::class, 'kontak'])->name('kontak');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('menus', App\Http\Controllers\Admin\MenuController::class);
    Route::resource('pesan-saran', App\Http\Controllers\Admin\PesanSaranController::class);
    Route::post('pesan-saran/store_user', [App\Http\Controllers\Admin\PesanSaranController::class, 'store_user'])->name('pesan-saran.store_user');
});
