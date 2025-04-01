<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UsuarioModel;

class LoginController extends Controller
{
    public function logar(Request $request)
    {
        // Validação dos campos
        $regras = [
            'email' => 'required|email',
            'senha' => 'required',
        ];

        $feedback = [
            'email.required' => 'O email é obrigatório',
            'senha.required' => 'A senha é obrigatória',
            'email.email' => 'O campo deve conter um email válido',
        ];

        // Validar as entradas do usuário
        $request->validate($regras, $feedback);

        // Receber os dados da requisição
        $email = $request->input('email');
        $senha = $request->input('senha');

        // Procurar o usuário pelo email
        $usuario = UsuarioModel::where('email', $email)->first();

        // Verificar se o usuário foi encontrado e se a senha está correta
        if ($usuario && Hash::check($senha, $usuario->senha)) {
            // Login bem-sucedido
            Auth::login($usuario);

            // Redirecionar para a página inicial após login
            return redirect()->route('site.index');
        }

        // Caso o email ou a senha estejam incorretos, retorna erro
        return back()->withErrors(['login' => 'Email ou senha incorretos.']);
    }

    public function formLogin()
    {
        if (auth()->check()) {
            // Se o usuário já estiver autenticado, redireciona para a página inicial
            return redirect()->route('site.index');
        }

        // Exibe a tela de login
        return view('site.login');
    }

    public function logout(Request $request)
    {
        // Fazendo logout
        Auth::logout();

        // Destruir a sessão
        $request->session()->invalidate();

        // Regenerar o token da sessão
        $request->session()->regenerateToken();

        // Redirecionar para a página de login (ou qualquer página desejada)
        return redirect()->route('site.login');
    }
}
