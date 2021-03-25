<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('theme:admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::view('/login', 'auth.login')->name('login');
        Route::post('/login', [AuthController::class, 'store']);
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
        Route::view('/home', 'home')->name('home');
    });
});