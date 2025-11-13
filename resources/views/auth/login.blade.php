@extends('app')

@section('title', 'Login')

@section('content')

<div>
    <!--Login-->
    <div>
        <h1>Entre aqui</h1>
    <form method="post" action="{{ route('login.post') }}">
        @csrf
        <fieldset>
            <div>
                <input type="text"
                    name="loginUsername"
                    placeholder="Nome de usuário"
                    required                
                >       
            </div>
            <div>
                <input type="password"
                    name="loginPassword"
                    placeholder="Senha"
                    required                
                >
            </div>
            <button type="submit">Entrar</button>
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
    <div>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Sair</button>
        </form>
    </div>
</div>

@endsection