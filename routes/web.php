<?php

use Illuminate\Support\Facades\Route;

//All UI Routes
Route::get('/', function() {
    return view('pages.home.welcome');
});

Route::get('/auth/login', function() {
    return view('pages.auth.login');
});

Route::get('/auth/signin', function() {
    return view('pages.auth.register');
});
