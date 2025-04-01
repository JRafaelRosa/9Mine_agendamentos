<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;
use App\Http\Requests\CadastroRequest;
use Illuminate\Support\Facades\Auth;

class CadastroUserController extends Controller
{
    public function formCadastro()
    {
        return view('site.formcadastro');
    }

    public function salvarCadastro(CadastroRequest $request)
    {
        $usuario = UsuarioModel::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'senha' => $request->senha,
            'permissao_id' => 1,
        ]);

        Auth::login($usuario);

        return view('site.index');
    }

}
