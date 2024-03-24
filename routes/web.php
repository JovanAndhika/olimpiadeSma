<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesertaController;

Route::get('/', [PesertaController::class, 'index'])->name('index');

//REGISTRATION
Route::get('/registration', [PesertaController::class, 'registration'])->name('registration');
Route::post('/registration/store', [PesertaController::class, 'storeRegistration'])->name('storeRegistration');


//LOGIN
Route::get('/login', [PesertaController::class, 'login'])->name('login');
Route::post('/login/confirmation', [PesertaController::class, 'authenticate'])->name('authenticate');


//ADMIN
Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', [AdminController::class, 'adminIndex'])->name('admin.index');
});




//ELIMINASI 1
//PESERTA
Route::get('/eliminationone', [PesertaController::class, 'eliminationone'])->name('eliminationone');