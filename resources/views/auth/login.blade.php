@extends('app')

@section('title', 'Login')

@section('content')

    <div class="btn btn-error p-4 m-4 absolute top-0 left-0">
        <form action="/logout" method="post">
            @csrf
            <button title="Voltar para o início" type="submit"><i class="fa-solid fa-arrow-left"></i></button>
        </form>
    </div>
<div class=" flex items-center justify-center min-h-screen">
    
    <!--Login-->
    <div class=" animate__animated animate__fadeInLeft animate_slow bg-white shadow-2xl rounded-3xl p-16 min-h-[200px] max-w-sm w-full text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-10">Faça Login</h1>
    <form method="post" action="{{ route('login.post') }}">
        @csrf
        <fieldset>
            <div class="relative mb-8">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                    <i class="fa-solid fa-user text-sm"></i>
                </span>
                <input class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400" type="text"
                    name="loginUsername"
                    placeholder="Nome de usuário"
                    required                
                >       
            </div>
            <div class="relative mb-8">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                    <i class="fa-solid fa-lock text-sm"></i>
                </span>
                <input class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400" type="password"
                    name="loginPassword"
                    placeholder="Senha"
                    required                
                >
            </div>
            <button  class="bg-sky-400 text-lg  text-white font-semibold py-4 px-15 rounded-full  hover:bg-sky-500 transition-all"  type="submit">Entrar</button>
            @if ($errors->any())
            <div>
                 @foreach ($errors->all() as $error)
                    <p style="color: red;">{{ $error }}</p>
                 @endforeach
             </div>
            @endif
        </fieldset>
    </div>
    </form>
    
    <!--Logout-->
    
</div>

@endsection