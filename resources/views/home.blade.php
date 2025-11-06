@extends('app')

@section('title', 'Home')

@section('content')
<section>
    <div>
        <h1>Welcome to the Home Page</h1>
        <p>Se você já tem uma conta, faça login:</p>
        <a href="{{ url('/login') }}">
            <button type="button">Entrar</button>
        </a>
    </div>

    <div>
        <p>Se você não tem uma conta, registre-se:</p>
        <a href="{{ url('/register') }}">
            <button type="button">Criar conta</button>
        </a>
    </div>
</section>
@endsection
