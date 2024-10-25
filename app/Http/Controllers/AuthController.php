<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   
     // Handle User Registration
     public function register(Request $request){
        //validation
        $request->validate([
         'firstname' => 'required|string|max:20|min:3',
         'lastname' => 'required|string|max:20|min:3',
         'email' => 'required|email|unique:users,email',
         'password' => 'required|min:4',
     ]);

     return redirect()->route('login')->with('success', 'Account created successfully!');
     }
 
     // Handle User Login
     public function login(Request $request) {
      // Validation
      $credentials = $request->validate([
          'email' => 'required|email',
          'password' => 'required',
      ]);
      // $loginStatus = Auth::attempt($credentials);
      // dd($loginStatus);
      if (Auth::attempt($credentials)) {
          $request->session()->regenerate();
          return redirect()->route('chatpage');
      } else {
          // This should not be reached if the credentials are valid
          dd('User not found or invalid credentials');
      }
  }
 
     // Handle User Logout
     public function logout(Request $request){
        dd($request);
     }
}
