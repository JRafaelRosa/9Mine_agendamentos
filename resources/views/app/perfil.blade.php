@extends('layouts.main')

@section('title','Perfil')

@section('content')
    <div class="container text-center text-white">
        <h2>Olá bem vindo {{ Auth::user()->nome }} </h2>
        <h3>seu perfil é de nivel {{ Auth::user()->permissao_id }}</h3>
    </div>

    <div>
        <form action="{{ route('site.logout') }}" method="POST">
            @csrf
            <input type="submit" name="logout" id="logout" value="Logout" class="btn btn-danger">
        </form>
    </div>

@endsection
