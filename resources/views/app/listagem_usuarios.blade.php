@extends('layouts.main')

@section('title','Listar Usuários')

@section('content')
    <section class="container mt-4">
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th class="text-warning">Nome</th>
                    <th class="text-warning">Telefone</th>
                    <th class="text-warning">E-mail</th>
                    <th class="text-warning">Nivel de permissão</th>
                    <th class="text-warning">Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr class="text-white">
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->telefone }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->permissao_id }}</td>
                        <td>
                            <div class="d-flex gap-3">
                                <a href="#">
                                    <i class="bi bi-pen text-warning"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-trash3 text-danger"></i>
                                </a>
                                <a href="#" class="text-warning">
                                    <i class="bi bi-info-circle"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
