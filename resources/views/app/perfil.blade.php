@extends('layouts.main')

@section('title','Perfil')

@section('content')
    <div class="container text-center text-white">
        <h2>Olá bem vindo {{ Auth::user()->nome }} </h2>
        <h3>seu perfil é de nivel {{ Auth::user()->permissao_id }}</h3>
    </div>

    <section>
        <div>
            <a href="{{ route('app.listarUsuarios') }}">
                <button class="btn-login__index btn bg-warning text-black" type="button" name="listar" value="listar">
                    Listagem de Usuários
                </button>
            </a>
        </div>
    </section>

    <div>
        <form action="{{ route('site.logout') }}" method="POST">
            @csrf
            <input type="submit" name="logout" id="logout" value="Logout" class="btn btn-danger">
        </form>
    </div>

@endsection
