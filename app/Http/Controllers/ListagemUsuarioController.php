<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;

class ListagemUsuarioController extends Controller
{
    public function viewListagemUsuario()
    {
        $usuarios = UsuarioModel::all();

        return view('app.listagem_usuarios', compact('usuarios'));
    }
}
