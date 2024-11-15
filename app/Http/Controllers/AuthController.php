<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(){
        return view('pages.auth.login');
    } 

    public function signPage(){
        return view('pages.auth.register');
    } 
   
}
