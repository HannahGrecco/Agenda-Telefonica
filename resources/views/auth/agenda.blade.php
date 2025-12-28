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
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Bem-vindo à sua Agenda Telefônica</h1>
        <p class="text-lg">Gerencie seus contatos de forma fácil e rápida.</p>
        <div>
        <button class="mx-auto mt-8 flex items-center gap-2 bg-sky-500 text-white font-semibold py-3 px-6 rounded-full hover:bg-sky-600 transition-all">
            <i class="fa fa-user"></i>
            <a href="{{ url('/contactRegister') }}">Adicionar contato</a>
        </button>

    </div>
        <div>
            <br>
            <hr>
            <p class="mt-4 text-2xl font-bold text-gray-800 text-left">Seus contatos</p>
        </div>
        <div class="p-8">
        @foreach ($contacts as $contact)
            <div class="hover:scale-105 hover:shadow-lg transform transition duration-150 flex items-center gap-6 p-4 mb-6 bg-white rounded-lg shadow-md flex-col sm:flex-row  ">
                <img class="rounded-full w-20 h-20 object-cover" src="{{ asset('storage/' . $contact->icon_perfil) }}" alt="Foto de perfil">
                <div class="text-left">
                    <a href="{{ route('contatos.edit', $contact->id) }}">
                    <p class="font-bold text-xl text-gray-800">{{ $contact->contact_name }}</p>
                    <p class="text-gray-600">{{ $contact->contact_phone }}</p>
                    <p class="text-gray-500">{{ $contact->contact_email }}</p>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="mt-4">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                        class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition-all">
                         Excluir
                        </button>
                    </form>
                    </a>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</section>

@endauth
@endsection
