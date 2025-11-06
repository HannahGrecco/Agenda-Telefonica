@extends('app')

@section('title', 'Cadastre-se')

@section('content')

    <section>
        <div>
            <h1>Crie sua conta</h1>
            <form method="post" action="{{ url ('register') }}" >
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

                    <button type="submit">Criar conta</button>
                </fieldset>
            </form>
        </div>

    </section>
@endsection