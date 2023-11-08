<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
use App\Http\Middleware\isEmployer;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
$request->fulfill();

return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

// register routes
Route::get('/register/seeker', [UserController::class, 'createSeeker'])->name('create.seeker');
Route::post('/register/seeker', [UserController::class, 'storeSeeker'])->name('store.seeker');

// employer registration
Route::get('/register/employer', [UserController::class, 'createEmployer'])->name('create.employer');
Route::post('/register/employer', [UserController::class, 'storeEmployer'])->name('store.employer');
// login Routes
Route::get('/login', [UserController::class, 'Login'])->name('login');
Route::post('/login', [UserController::class, 'postLogin'])->name('post.login');

// logout routes
Route::post('/logout', [UserController::class, 'Logout'])->name('user.logout');

// into the dashboard -> only the verified users
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('verified')->name('dashboard');
Route::get('/verify',[DashboardController::class, 'verify'])->name('verification.notice'); 


Route::get('/resend/verification/email', [DashboardController::class, 'resend'])->name('resend.email');

Route::get('subscribe', [SubscriptionController::class, 'subscribe']);
Route::get('pay/ppid', [SubscriptionController::class, 'initiatePayment'])->name('pay.ppid');
Route::get('pay/weekly', [SubscriptionController::class, 'initiatePayment'])->name('pay.weekly');
Route::get('pay/monthly', [SubscriptionController::class, 'initiatePayment'])->name('pay.monthly');

Route::get('payment/success', [SubscriptionController::class, 'paymentSuccess'])->name('payment.success')->middleware('auth');
Route::get('payment/cancel', [SubscriptionController::class,
'cancel'])->name('payment.cancel')->middleware('auth');



