<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', [UserController::class, 'index'])->name('index');

//REGISTRATION
Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::post('/registration/store', [UserController::class, 'storeRegistration'])->name('storeRegistration');


//LOGIN
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/confirmation', [UserController::class, 'loginConfirmation'])->name('loginConfirmation');


//ADMIN
Route::get('/admin/adminIndex', [AdminController::class, 'index'])->name('admin.index');


//ELIMINASI 1
//PESERTA
Route::get('/eliminationone', [UserController::class, 'eliminationone'])->name('eliminationone');