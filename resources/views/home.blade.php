@extends('app')

@section('title', 'Home')

@section('content')
<section class="flex items-center justify-center min-h-screen">

    <div class=" animate__animated animate__fadeInLeft animate_slow flex flex-col md:flex-row bg-white md:bg-transparent rounded-2xl  shadow-xl overflow-hidden max-w-3xl w-full">

        <div class="bg-sky-400 text-white flex flex-col justify-center items-center p-10 md:w-1/2">

            <h1 class="text-2xl md:text-3xl font-bold text-center mb-6">Bem-vindo à sua nova<br>
                Agenda de contatos!
            </h1>
            <p></p>
            
            <img class="w-[250px] drop-shadow-lg" src="{{ asset('images/logo1.png') }}" alt="Bem-vindo">
        </div>
        
        <div class="bg-white flex flex-col justify-center items-center gap-6 p-10 md:w-1/2 shadow-md md:shadow-none">

            <div class="text-center">
                <p class="text-gray-700 text-xl mb-8">Se você já tem uma conta:</p>
                <a href="{{ url('/login') }}">
                <button class="bg-sky-400 text-lg text-white font-semibold py-4 px-15 rounded-full  hover:bg-sky-500 transition-all" type="button">Entrar</button>
                </a>
             </div>

            <div class="text-center">
                <p class="text-gray-700 mb-8 text-xl">Se você não tem uma conta:</p>
                <a href="{{ url('/register') }}">
                <button class="bg-white text-lg text-sky-400 border-sky-400 border-2 font-semibold py-4 px-10 rounded-full hover:bg-gray-100 transition-all" type="button">Criar conta</button>
                </a>
            </div>
        </div>
        
    </div>
</section>
@endsection

