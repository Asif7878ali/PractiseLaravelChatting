<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//All UI Routes
Route::get('/', function () {
    return view('pages.home.welcome');
});

Route::get('/logInPage', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/signInPage', function () {
    return view('pages.auth.register');
})->name('signin');

Route::get('/admin', function () {
    return view('pages.admin.loginAdmin');
});

Route::middleware('auth')->group(function () {
     Route::get('/chat', function () {
        return view('pages.chat.chat');
    });
    Route::get('/profile', function () {
        return view('pages.profile.completeProfile');
    });
});

//Auth Route
Route::post('/auth/login',[AuthController::class, 'login'])->name('handle.login');
Route::post('/auth/signin',[AuthController::class, 'register'])->name('handle.signin');