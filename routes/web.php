<?php

use App\Http\Controllers\AuthControll;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', [AuthControll::class, 'login'])->name('login');
Route::post('/login', [AuthControll::class,  'authenticating']);
Route::get('/halaman', function() {
    return view('halaman');
})->middleware('auth')->name('halaman');

