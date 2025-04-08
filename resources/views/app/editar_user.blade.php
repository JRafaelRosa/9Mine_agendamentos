@extends('layouts.main')

@section('title', 'Editar Usuário')

@section('content')

    <section class="container d-flex justify-content-center align-items-center">
        <div class="container-fluid w-75 p-4 border border-warning rounded">
            <h2 class="text-center text-warning mb-2">Editar usuário</h2>
            <form method="POST" action="{{ route('app.atualizarUsuario', ['id' => $usuario->id]) }}">
                @csrf
                <ul class="list-group p-0">
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" id="nome" name="nome" value="{{ $usuario->nome }}" readonly class="login-item form-control rounded">
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" id="cpf" name="cpf" value="{{ $usuario->CPF }}" readonly class="login-item form-control rounded">
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="email" class="form-label">E-Mail</label>
                        <input type="email" id="email" name="email" value="{{ $usuario->email }}" readonly class="login-item form-control rounded">
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" value="{{ $usuario->telefone }}" readonly class="login-item form-control rounded">
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <label for="permissao_id" class="form-label bg-transparent">Permissão</label>
                        <select  name="permissao_id" class="form-select bg-transparent text-warning rounded border-warning">
                            <option class="bg-transparent" value="1" {{ $usuario->permissao_id == 1 ? 'selected' : '' }}>Cliente</option>
                            <option class="bg-transparent" value="2" {{ $usuario->permissao_id == 2 ? 'selected' : '' }}>Funcionário</option>
                            <option class="bg-transparent" value="3" {{ $usuario->permissao_id == 3 ? 'selected' : '' }}>Administrador</option>
                            <option class="bg-transparent" value="4" {{ $usuario->permissao_id == 4 ? 'selected' : '' }}>Super Administrador</option>
                        </select>
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <input value="Salvar" class="btn btn-warning w-100 mt-3 btn-enviar__form" type="submit" name="Salvar">
                    </li>
                </ul>
            </form>
        </div>
    </section>

@endsection
