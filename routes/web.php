<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// register routes
Route::get('/register/seeker', [UserController::class, 'createSeeker'])->name('create.seeker');
Route::post('/register/seeker', [UserController::class, 'storeSeeker'])->name('store.seeker');

// login Routes
Route::get('/login', [UserController::class, 'Login'])->name('user.login');
Route::post('/login', [UserController::class, 'postLogin'])->name('post.login');

// logout routes
Route::post('/logout', [UserController::class, 'Logout'])->name('user.logout');

// into the dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
 