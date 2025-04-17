<?php

use App\Http\Controllers\AuthControll;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('dashboard');})->name('dashboard');

Route::get('/login', [AuthControll::class, 'login'])->name('login');
Route::post('/login', [AuthControll::class, 'authenticating'])->name('login.post');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/halaman', function () {
    return view('halaman');
})->middleware('auth')->name('halaman');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
