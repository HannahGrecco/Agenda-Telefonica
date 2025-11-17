@extends('app')

@section('title', 'Cadastre-se')

@section('content')

    <section class=" flex items-center justify-center min-h-screen">
        <div class=" animate__animated animate__fadeInLeft animate_slow bg-white shadow-2xl rounded-3xl p-16 min-h-[200px] max-w-sm w-full text-center" >
            <h1 class="text-2xl font-bold text-gray-800 mb-10">Crie sua conta</h1>
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <fieldset>
                    <div class="relative mb-8">
                        <input class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400" type="text"
                            name="registerUsername"
                            placeholder="Nome de usuário"
                            required                
                        >       
                    </div>
                    <div class="relative mb-8">
                        <input class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400" type="email"
                            name="registerEmail"
                            placeholder="Email"
                            required                
                        >
                    </div>
                    <div class="relative mb-8">
                        <input class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400" type="password"
                            name="registerPassword"
                            placeholder="Senha"
                            required                
                        >
                    </div>

                    <button class="w-full rounded-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 focus:outline-none focus:ring-2 focus:ring-sky-400" type="submit">Criar conta</button>
                </fieldset>
            </form>
        </div>

    </section>
@endsection