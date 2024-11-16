<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Load Home Page
Route::view('/','pages.home.welcome');
//User Controller Route Create, Read, Update, Delete
Route::resource('user', UserController::class);
//Authtication Route
Route::controller(AuthController::class)->group(function(){
    Route::get('/auth/login/page', 'loginPage')->name('login.page');
    Route::post('/auth/login', 'login')->name('login');
    Route::get('/profile/setup','profileSetup')->name('profile.setup');
    // Route::post('/auth/logout', 'Logout')->name('logout');
});
