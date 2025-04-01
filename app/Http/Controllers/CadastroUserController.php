<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;
use App\Http\Requests\CadastroRequest;

class CadastroUserController extends Controller
{
    public function formCadastro()
    {
        return view('site.formcadastro');
    }

    public function salvarCadastro(CadastroRequest $request)
    {
        return view('site.formcadastro');
    }

}
