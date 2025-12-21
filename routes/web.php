<?php

use App\Livewire\DashboardProjects;
use App\Livewire\ProfileForm;
use App\Livewire\ProjectDetails;
use App\Livewire\ProjectsList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

/* Route::get('/login', function () { */
/*     return view('auth.login'); */
/* })->name('login'); */

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', ProfileForm::class)->name('profile');
    /* Route::view('/profile', 'profile')->name('profile'); */
    /* Route::view('/dashboard', 'dashboard')->name('dashboard'); */
    Route::get('/dashboard', DashboardProjects::class)->name('dashboard');
    /* Route::view('/projects', 'projects.index')->name('projects.index'); */
    Route::get('/projects', ProjectsList::class)->name('projects.index');
    /* Route::view('/projects/{id}', 'projects.show')->name('projects.show'); */
    Route::get('/projects/{project}', ProjectDetails::class)->name('projects.show');
});

/* Route::view('/profile', 'profile')->name('profile')->middleware('auth'); */
/* Route::view('/forgot-password', 'auth.forgot-password')->name('password.request'); */
/* Route::view('/reset-password/{token}', 'auth.reset-password')->name('password.reset'); */
/* Route::view('/email/verify', 'auth.verify-email')->name('verification.notice')->middleware('auth'); */
/* Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware(['auth', 'verified']); */
