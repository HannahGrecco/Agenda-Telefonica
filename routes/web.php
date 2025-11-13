<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});

##Rota post e get de Login
Route::get ('/login', [LoginController::class, 'showLogin'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');
#Rota post e get de Register
Route::get ('/register', [RegisterController::class, 'showRegister'])->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

##Rota de Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
##Rota da Agenda
Route::get('/agenda', function () {
    return view('auth.agenda');
})->middleware('auth');