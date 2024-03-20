<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::post('/registration/store', [UserController::class, 'storeRegistration'])->name('storeRegistration');