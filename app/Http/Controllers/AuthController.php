<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(){
        return view('pages.auth.login');
    } 

   
    public function login(Request $request){
         // Validate the login input
         $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($credentials);
        if(!Auth::attempt($credentials)){
            session()->flash('error', 'Sorry Credentials doen not Match'); 
            return to_route('login.page');
        }
        dd('Ok');

    }

    public function logout(Request $request){
       
    }
}
