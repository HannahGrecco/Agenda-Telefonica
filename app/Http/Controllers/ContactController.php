<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illumite\Support\Facades\Storage;


class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('auth.contactReg');
    }

    public function addContact(Request $request)
    {
        $incomingFields = $request->validate([
            'contact_name' => ['required', 'min:3'],
            'contact_phone' => ['required', 'min:10'],
            'contact_email' => ['required', 'email'],
            'icon_perfil' => ['nullable', 'image', 'max:2048'],
        ]);



        if ($request->hasFile('icon_perfil')) {
            $path = $request->file('icon_perfil')->store('contact_images', 'public');
            $incomingFields['icon_perfil'] = $path;

        }

         Contact::create([
            'contact_name' => $incomingFields['contact_name'],
            'contact_phone' => $incomingFields['contact_phone'],
            'contact_email' => $incomingFields['contact_email'],
            'icon_perfil' => $incomingFields['icon_perfil'] ?? null,
        ]);

        // Lógica para salvar o contato no banco de dados
        // ...
        return redirect('/agenda')->with('success', 'Contato adicionado com sucesso!');
    }
}
