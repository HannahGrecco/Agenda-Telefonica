@extends('home')

@section('title', 'Agenda Telefonica')

@section('content')

@auth
<section class=" flex text-center justify-center min-h-screen">
     <div class="btn btn-error p-4 m-4 absolute top-0 left-0">
        <form action="/logout" method="post">
            @csrf
            <button title="Sair" type="submit"><i class="fa-solid fa-arrow-left"></i></button>
        </form>
    </div>
    <div class="p-8 pt-[200px]">
        <h1 class="text-3xl font-bold mb-4">Bem-vindo à sua Agenda Telefônica</h1>
        <p class="text-lg">Gerencie seus contatos de forma fácil e rápida.</p>
        <div>
        <button class="mt-8 bg-white text-lg text-sky-400 border-sky-400 border-2 font-semibold py-4 px-10 rounded-full hover:bg-gray-100 transition-all" type="button"><i class="fa fa-user mr-4 "></i><a href="{{ url('/contactRegister') }}">Adicione um contato</a>
        </button>
    </div>
        <div>
            <br>
            <hr>
            <p class="text-2xl font-medium text-gray-600">Seus contatos</p>
        </div>
        <div class="p-8">
        @foreach ($contacts as $contact)
        <div>

        </div>
            <img class="rounded-full w-20 h-20 object-cover align-middle" src="{{ asset('storage/' . $contact->icon_perfil) }}" width="50">
            <div>


                <p><strong>{{ $contact->contact_name }}</strong></p>
                <p>{{ $contact->contact_phone }}</p>
                <p>{{ $contact->contact_email }}</p>
            </div>

        @endforeach
            </div>
    </div>
</section>

@endauth
@endsection
