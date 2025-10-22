<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function() {
    return view('home');
});

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('login/proses', [PageController::class, 'proseslogin'])->name('login.proses');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
