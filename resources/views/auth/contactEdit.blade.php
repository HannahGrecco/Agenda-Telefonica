@extends('home')

@section('title', 'Editar Contato')

@section('content')

@auth
    @if (session('success'))
    <div class="fixed top-4 right-4 z-50 p-4 rounded bg-green-100 text-green-800 border border-green-300 shadow-lg">
        {{ session('success') }}
    </div>
    @endif
    <section class="flex text-center justify-center min-h-screen">
        <div class="btn btn-error p-4 m-4 absolute top-0 left-0">
        <form action="/logout" method="post">
            @csrf
            <button title="Sair" type="submit"><i class="fa-solid fa-arrow-left"></i></button>
        </form>
        </div>
        <div>
            <h1 class="mt-8 p-4 text-3xl font-bold mb-4">Editar Contato</h1>
            <form
            action="{{ route('contatos.update', $contato->id) }}"
            method="POST"
            class="space-y-4"
            >
            @csrf
            @method('PUT')
            <div class="relative mb-8">
                 <input
                type="text"
                name="contact_name"
                value="{{ old('contact_name', $contato->contact_name) }}"
                class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400"
                placeholder="Nome"
            >
            </div>

            <div class="relative mb-8">
                <input
                type="text"
                name="contact_phone"
                value="{{ old('contact_phone', $contato->contact_phone) }}"
                class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400"
                placeholder="Telefone"
            >
            </div>
            <div class="relative mb-8">
            <input
                type="email"
                name="contact_email"
                value="{{ old('contact_email', $contato->contact_email) }}"
                class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400"
                placeholder="Email"
            >
            </div>
            <button
                type="submit"
                class="mb-8 w-full rounded-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 focus:outline-none focus:ring-2 focus:ring-sky-400" type="submit"
            >
                Salvar alterações
            </button>
            </form>
         </div>
    </section>

@endauth
@endsection
