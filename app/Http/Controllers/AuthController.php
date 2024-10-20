<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     dd($request->all());
     return redirect()->route('login')->with('success', 'Account created successfully!');
     }
 
     // Handle User Login
     public function login(Request $request){
         //validation
         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        dd($request->all());
     }
 
     // Handle User Logout
     public function logout(Request $request){
        dd($request);
     }
}
