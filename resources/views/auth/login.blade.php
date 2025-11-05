@extends('app')

@section('title', 'Login')

@section('content')

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
        
    </form>
</div>

@endsection