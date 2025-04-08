@extends('layouts.main')

@section('title', 'Editar Usuário')

@section('content')

    <section class="container d-flex justify-content-center align-items-center">
        <div class="container-fluid w-75 p-4 border border-warning rounded">
            <h2 class="text-center text-warning mb-2">Excluir usuário</h2>
            <form method="POST" action="{{ route('app.excluirUsuario', ['id' => $usuario->id]) }}">
                @csrf
                @method('DELETE')
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
                        <input type="number" id="permissao_id" name="permissao_id" value="{{ $usuario->permissao_id }}" readonly class="login-item form-control rounded">
                    </li>
                    <li class="list-group-item bg-transparent text-warning p-3 border-0">
                        <button type="button" class="btn btn-danger w-100 mt-3" data-bs-toggle="modal" data-bs-target="#confirmarExclusaoModal">
                            Excluir
                        </button>
                    </li>
                </ul>
            </form>
        </div>
    </section>

    @include('layouts._components.confirmacao_exclusao')
@endsection
