<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{   
    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function showLogin()
    {
        return view('auth.login');
    }
    // Validação do formulário de login
   public function login(Request $request)
{
    // Validação dos campos
    $credentials = $request->validate([
        'loginUsername' => ['required'],
        'loginPassword' => ['required', 'min:8', 'max:20']
    ]);

    // Tentativa de autenticação
    if (Auth::attempt([
        'name' => $credentials['loginUsername'],
        'password' => $credentials['loginPassword']
    ])) {
        $request->session()->regenerate();
        return redirect('/agenda');
    }

    // Se falhar, retorna com erro
    return back()->withErrors([
        'loginUsername' => 'Nome de usuário ou senha incorretos.'
    ])->onlyInput('loginUsername');
}
  
}
