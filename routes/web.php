<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Load Home Page
Route::view('/','pages.home.welcome');
//Authtication Route
Route::controller(AuthController::class)->group(function(){
    Route::get('/auth/login/page', 'loginPage')->name('login.page');
    Route::get('/auth/signin/page', 'signPage')->name('signin.page');
    // Route::post('/auth/login', 'login')->name('login');
    // Route::post('/auth/logout', 'Logout')->name('logout');
});
