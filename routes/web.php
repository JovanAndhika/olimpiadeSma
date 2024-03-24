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
Route::post('/login/confirmation', [UserController::class, 'authenticate'])->name('authenticate');


//ADMIN
Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminIndex'])->name('admin.index');
});
// Route::get('/admin', [AdminController::class, 'adminIndex'])->name('admin.index');



//ELIMINASI 1
//PESERTA
Route::get('/eliminationone', [UserController::class, 'eliminationone'])->name('eliminationone');