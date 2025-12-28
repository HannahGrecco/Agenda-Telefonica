<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contactEdit/{contato}', [ContactController::class, 'edit'])->middleware('auth')->name('contatos.edit');

Route::put('/contactEdit/{contato}', [ContactController::class, 'update'])->middleware('auth')->name('contatos.update');

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
##Rota para cadastro de contato
Route::get('/contactRegister', [ContactController::class, 'showContactForm'])->middleware('auth');
Route::post('/contactRegister', [ContactController::class, 'addContact'])->middleware('auth')->name('contactAdd.post');
Route::get('/agenda', [ContactController::class, 'index'])->middleware('auth')->name('agenda.index');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])
    ->name('contacts.destroy');
