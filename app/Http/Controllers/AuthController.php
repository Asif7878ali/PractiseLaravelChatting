<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(){
        return view('pages.auth.login');
    } 
    public function profileSetup(){
        return view('pages.auth.profilesetup');
    } 

   
    public function login(Request $request){
         // Validate the login input
         $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
         // Attempt to log in the user
        if(!Auth::attempt($credentials)){
            session()->flash('error', 'Sorry Credentials doen not Match'); 
            return to_route('login.page');
        }

        // Check if the user's profile setup is complete
        $user = Auth::user();
        if(! $user->profile_setup){
            session()->flash('warning', 'Complete Profile Setup to Chat'); 
            return to_route('profile.setup');
        }
         dd('Chat app');
    }

    public function logout(Request $request){
       
    }
}
