<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

Route::get('/', function(){
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::group(['middleware' => ['auth', 'client']], function() {
    Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.dashboard');
});

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticating']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'registerProccess']);
Route::get('logout', [AuthController::class, 'logout']);