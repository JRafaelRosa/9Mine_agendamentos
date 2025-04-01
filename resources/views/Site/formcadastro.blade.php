@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')

    <section class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">

        <div class="container-fluid w-75 p-4 border border-warning rounded" style="max-width: 35rem;">
            <form action="{{ route('site.formCadastro') }}" method="POST">
                <h2 class="text-center text-warning mb-2">Fomulário de Login</h2>
                @csrf
                <ul class="list-group p-0">
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" placeholder="João da Silva" required class="login-item form-control rounded">
                        @if($errors->has('nome'))
                            <div>
                                <p class="text-danger text-center">{{ $errors->first('nome') }}</p>
                            </div>
                        @endif
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" id="cpf" value="{{ old('cpf') }}" name="cpf" placeholder="000.000.000-00" required class="login-item form-control rounded">
                        @if($errors->has('cpf'))
                            <div>
                                <p class="text-danger text-center">{{ $errors->first('cpf') }}</p>
                            </div>
                        @endif
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" id="telefone" value="{{ old('telefone') }}" name="telefone" placeholder="(42)99999-9999" required class="login-item form-control rounded">
                        @if($errors->has('telefone'))
                            <div>
                                <p class="text-danger text-center">{{ $errors->first('telefone') }}</p>
                            </div>
                        @endif
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="exemplo@email.com" required class="login-item form-control rounded">
                        @if($errors->has('email'))
                            <div>
                                <p class="text-danger text-center">{{ $errors->first('email') }}</p>
                            </div>
                        @endif
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="data_nascimento" class="form-label">Data de nascimento</label>
                        <input type="date" id="data_nascimento" value="{{ old('data_nascimento') }}" name="data_nascimento" placeholder="01-01-2000" required class="login-item form-control rounded">
                        @if($errors->has('data_nascimento'))
                            <div>
                                <p class="text-center text-danger">{{ $errors->first('data_nascimento') }}</p>
                            </div>
                        @endif
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" id="senha" name="senha" required class="login-item form-control rounded">
                        @if($errors->has('senha'))
                            <div>
                                <p class="text-center text-danger">{{ $errors->first('senha') }}</p>
                            </div>
                        @endif
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="senha_confim" class="form-label">Confirmação de senha</label>
                        <input type="password" id="senha_confirm" name="senha_confirm" required class="login-item form-control rounded">
                        @if($errors->has('senha_confirm'))
                            <div>
                                <p class="text-center text-danger">{{ $errors->first('senha_confirm') }}</p>
                            </div>
                        @endif
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <input value="Enviar" class="btn btn-warning w-100 mt-3 btn-enviar__form" type="submit" name="Enviar">
                    </li>
                </ul>
            </form>
        </div>
    </section>
@endsection
