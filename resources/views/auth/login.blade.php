@extends('app')

@section('title', 'Login')

@section('content')

<div>
    <!--Login-->
    <div>
        <h1>Entre aqui</h1>
    <form action="post">
        @csrf
        <fieldset>
            <div>
                <input type="text"
                    name="username"
                    placeholder="Nome de usuário"
                    required                
                >       
            </div>
            <div>
                <input type="password"
                    name="password"
                    placeholder="Senha"
                    required                
                >
            </div>
        </fieldset>
    </div>
    </form>
    <!--Logout-->
    <div>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Sair</button>
        </form>
    </div>
</div>

@endsection