@extends('home')

@section('title', 'Agenda Telefonica')

@section('content')

@auth
<section>
    <div>
        <h1>Bem-vindo à sua Agenda Telefônica</h1>
        <p>Gerencie seus contatos de forma fácil e rápida.</p>
    </div>
</section>
@endauth
@endsection