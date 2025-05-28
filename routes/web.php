<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ujiCoba;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LoginController::class, 'index'])->name('dashboard');

    // admin only
    Route::middleware(['can:admin'])->group(function () {
        Route::resource('admin', LoginController::class);
    });
    // kasir only
    Route::middleware(['can:kasir'])->group(function () {
        Route::get('/kasir', [ujiCoba::class, 'dashKasir']);
    });
    // user only
    Route::middleware(['can:user'])->group(function () {
        Route::get('/user', [ujiCoba::class, 'dashUser']);
    });
});
