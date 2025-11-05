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
        ]);
    }

   ## public function register(Request $request)
    ##{
    ##    $incomingFields = $request->validate([
  ##          'registerUsername' => ['required', 'min:3'],
 ##           'registerPassword' => ['required', 'min:8', 'max:20'],
 ##           'registerEmail' => ['required', 'email', Rule::unique('users', 'email')]
##        ]);

 ##       $incomingFields['registerPassword'] = bcrypt($incomingFields['registerPassword']);

  ##   $user = User::create($incomingFields);
    ##    auth()->login($user);
      ##  return redirect('/');
    ##}
}
