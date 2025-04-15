<?php

use App\Http\Controllers\AuthControll;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthControll::class, 'login'])->name('login');
Route::post('/login', [AuthControll::class,  'authenticating']);
