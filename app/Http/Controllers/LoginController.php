<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

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
        $incomingFields = $request->validate([
            'loginUsername' => ['required'],
            'loginPassword' => ['required', 'min:8', 'max:20']
        ]); {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['loginUsername' => 'Nome ou senha incorretos'])
    ;}

  
}
