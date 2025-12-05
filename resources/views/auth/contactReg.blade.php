@extends('home')

@section('title', 'Cadastro de Contato')
@section('content')
    @auth
    <section class=" flex text-center justify-center min-h-screen">
         <div class="btn btn-error p-4 m-4 absolute top-0 left-0">
            <form action="/logout" method="post">
                @csrf
                <button title="Voltar para o início" type="submit"><i class="fa-solid fa-arrow-left"></i></button>
            </form>
        </div>
        <div class="p-8 pt-[200px]">
            <h1 class="text-3xl font-bold mb-4">Cadastro de Contato</h1>
            <form method="POST" action="{{ route('contactAdd.post') }}" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div>
                        <input type="file" name="icon_perfil">
                    </div>
                    <div class="relative mb-8">
                        <input class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400" type="text"
                            name="contact_name"
                            placeholder="Nome do Contato"
                            required
                        >
                    </div>
                    <div class="relative mb-8">
                        <input class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400" type="text"
                            name="contact_phone"
                            placeholder="Telefone do Contato"
                            required
                        >
                    </div>
                    <div class="relative mb-8">
                        <input class="w-full rounded-full bg-gray-100 px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400" type="text"
                            name="contact_email"
                            placeholder="Email"
                            required
                        >
                    </div>

                    <button class="mb-8 w-full rounded-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 focus:outline-none focus:ring-2 focus:ring-sky-400" type="submit">Salvar</button>
                    <button class="w-full rounded-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 focus:outline-none focus:ring-2 focus:ring-sky-400"
                        type="button"
                        onclick="window.history.back();"
                        >
                        Cancelar
                    </button>
                </fieldset>
            </form>
        </div>
    @endauth
@endsection
