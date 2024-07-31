<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

Route::group(['middleware' => ['role:admin']], function() {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::group(['middleware' => ['role:client']], function() {
    Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.dashboard');
});

Route::get('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
