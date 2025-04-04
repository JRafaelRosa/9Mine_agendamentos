@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <section class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="container-fluid w-50 p-4 border border-warning rounded" style="max-width: 28rem;">

            @if ($errors->any())
                <div class="d-flex justify-content-center">
                    <div class="erro-login text-center text-white border border-danger rounded p-2 w-100 mb-2">
                        @foreach ($errors->all() as $error)
                            <p class="m-0">{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            @endif

            <form action="{{ route('site.login') }}" method="POST">
                <h2 class="text-center text-warning mb-2">Login</h2>
                @csrf
                <ul class="list-group p-0">
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="usuario" class="form-label">Usuário</label>
                        <input type="text" id="usuario" name="usuario" placeholder="João da Silva" required class="login-item form-control rounded">
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" placeholder="exemplo@email.com" required class="login-item form-control rounded">
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" id="senha" name="senha" required class="login-item form-control rounded" placeholder="********" autocomplete="new-password">
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <input value="Enviar" class="btn btn-warning w-100 mt-3 btn-enviar__form" type="submit" name="Enviar">
                    </li>
                </ul>
                <p class="text-white text-center mt-3">
                    Não possui conta? <a href="{{ route('site.formCadastro') }}">Criar uma</a>
                </p>
            </form>
        </div>
    </section>
@endsection
