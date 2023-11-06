<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register/seeker', [UserController::class, 'createSeeker'])->name('create.seeker');
Route::post('/register/seeker', [UserController::class, 'storeSeeker'])->name('store.seeker');

Route::get('/login', [UserController::class, 'Login'])->name('user.login');

 