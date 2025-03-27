<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('admin.main');
});

Route::get('/login', function(){
    return view('admin.login');
});
Route::post('/login/store', [LoginController::class, 'login'])->name('login.store');

Route::get('/register', function(){
    return view('admin.register');
});
Route::post('/register/store', [RegisterController::class, 'register'])->name('register.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');