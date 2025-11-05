<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});
Route::get ('/login', [LoginController::class, 'showLogin'])->name('login');
##Route::get ('/register', [User::class, 'showRegister']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');