<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeekerRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
   const JOB_SEEKER =  'seeker';

   public function createSeeker()
   {
    return view('user.seeker-register');
   }

   public function storeSeeker(SeekerRegistrationRequest $request)
   {
      // validating the entries
      // linked with the seekerrequestfile
      User::create([
         'name' => request('name'),
         'email' => request('email'),
         'password' => bcrypt(request('password')),
         'user_type' => self::JOB_SEEKER
      ]);

      return redirect()->route('user.login');
   }

   public function Login()
   {
      return view ('user.login');
   }

   public function postLogin(Request $request)
   {
      $request->validate([
         'email' => 'required',
         'password' => 'required',
      ]);

      $credentials = $request->only('email','password');

      if ( Auth::attempt($credentials)) {

         return redirect()->intended('dashboard');

      }
      
   }
}
