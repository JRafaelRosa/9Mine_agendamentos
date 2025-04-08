<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;

class UsuarioController extends Controller
{

    public function editar($id)
    {
        $usuario = UsuarioModel::find($id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        return view('app.editar_user', compact('usuario'));
    }


    public function atualizarPermissao(Request $request, $id)
    {
        $usuario = UsuarioModel::find($id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        $usuario->permissao_id = $request->input('permissao_id');
        $usuario->save();

        return redirect()->route('app.listarUsuarios')->with('success', 'Permissão atualizada com sucesso.');
    }

    public function excluir($id)
    {
        $usuario = UsuarioModel::find($id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        return view('app.excluir_user', compact('usuario'));
    }

    public function excluirUsuario(Request $request, $id){
        $usuario = UsuarioModel::find($id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuario não encontrado.');
        }

        $usuario->delete();

        return redirect()->route('app.listarUsuarios')->with('success', 'Usuário excluído com sucesso.');
    }
}
