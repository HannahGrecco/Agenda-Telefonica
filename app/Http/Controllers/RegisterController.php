<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class RegisterController extends Controller
{   
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'registerUsername' => ['required', 'min:3'],
            'registerPassword' => ['required', 'min:8', 'max:20'],
            'registerEmail' => ['required', 'email', Rule::unique('users', 'email')],
        ]);

        $incomingFields['registerPassword'] = bcrypt($incomingFields['registerPassword']);

        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/agenda');
    }
}
