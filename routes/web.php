<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::view('/', 'index')->name('index');

Route::view('login', 'login')->name('login');

Route::view('register', 'register')->name('register');

Route::view('dashboard', 'dashboard')->name('dashboard');

Route::view('user/:id', 'user')->name('user');

Route::view('client/:id', 'client')->name('client');

Route::view('users', 'users')->name('users');

Route::get('clients', [ClientController::class, 'getAll'])->name('clients');

Route::view('forgotPassword', 'forgotPassword')->name('forgotPassword');

Route::view('resetPassword/:token', 'resetPassword')->name('resetPassword');

Route::fallback(function () {
    return view('notFound');
});