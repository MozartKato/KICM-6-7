<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/profile', 'profile');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/', [AuthController::class, 'dashboard'])->middleware('auth.session');
Route::get('/logout', [AuthController::class, 'logout']);
