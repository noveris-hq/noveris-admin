<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

/* Route::get('/login', function () { */
/*     return view('auth.login'); */
/* })->name('login'); */

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
/* Route::view('/profile', 'profile')->name('profile')->middleware('auth'); */
/* Route::view('/forgot-password', 'auth.forgot-password')->name('password.request'); */
/* Route::view('/reset-password/{token}', 'auth.reset-password')->name('password.reset'); */
/* Route::view('/email/verify', 'auth.verify-email')->name('verification.notice')->middleware('auth'); */
/* Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware(['auth', 'verified']); */
