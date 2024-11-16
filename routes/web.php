<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileSetupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Load Home Page
Route::view('/','pages.home.welcome');
Route::view('/user/chat', 'pages.chat.chat')->name('chat.page');
//User Controller Route Create, Read, Update, Delete
Route::resource('user', UserController::class);

//Authtication Route
Route::controller(AuthController::class)->group(function(){ 
    Route::get('/auth/login/page', 'loginPage')->name('login.page');
    Route::post('/auth/login', 'login')->name('login');
    // Route::post('/auth/logout', 'Logout')->name('logout');
});

//complete profile setup
Route::put('/profile/zaid/setup/{id}',[ProfileSetupController::class ,'profilesetup'])->name('zaid.setup');

