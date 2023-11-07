<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('dashboard');
    }

    public function verify() {
        return view('user.verify');

    }

    // resend email
    public function resend(Request $request)
    {
        $user = Auth::user();

        if($user->hasVerifiedEmail()) {
            return redirect()->route('dashboard')->with('successMessage','Your Email is already Verified');
        }else{
            $user->sendEmailVerificationNotification();
        }

        return redirect()->route('login')->with('successMessage', 'Verification link has been sent successfully');
    }
}
