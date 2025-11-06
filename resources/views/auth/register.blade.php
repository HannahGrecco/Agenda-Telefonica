@extends('app')

@section('title', 'Cadastre-se')

@section('content')
    <section>
        <div>
            <h1>Crie sua conta</h1>
            <form action="post" action="{{ url('register') }}" >
                @csrf
                <fieldset>
                    <div>
                        <input type="text"
                            name="registerUsername"
                            placeholder="Nome de usuário"
                            required                
                        >       
                    </div>
                    <div>
                        <input type="email"
                            name="registerEmail"
                            placeholder="Email"
                            required                
                        >
                    </div>
                    <div>
                        <input type="password"
                            name="registerPassword"
                            placeholder="Senha"
                            required                
                        >
                    </div>
                </fieldset>
            </form>
        </div>

    </section>
@endsection