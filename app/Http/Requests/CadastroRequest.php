<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CpfValido;

class CadastroRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer esta requisição.
     */
    public function authorize(): bool
    {
        return true; // Permite a requisição
    }

    /**
     * Regras de validação que se aplicam à requisição.
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|min:3|max:100',
            'email' => 'required|email|unique:perfil,email',
            'telefone' => ['required', 'regex:/^\(\d{2}\)\d{8,9}$/'],
            'cpf' => ['required', 'min:14', 'max:14', 'unique:perfil,CPF', new CpfValido()],
            'data_nascimento' => 'required|date',
            'senha' => 'required|min:6',
            'senha_confirm' => 'required|same:senha',
        ];
    }

    /**
     * Mensagens personalizadas de erro.
     */
    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 3 caracteres.',
            'nome.max' => 'O nome deve ter no máximo 100 caracteres.',
            'telefone.regex' => 'O telefone deve estar no formato (XX)XXXXXXXXX.',
            'cpf.min' => 'O CPF deve ter exatamente 14 caracteres.',
            'cpf.max' => 'O CPF deve ter exatamente 14 caracteres.',
            'cpf.unique' => 'O CPF já está cadastrado.',
            'email.unique' => 'O email já está cadastrado.',
            'senha.min' => 'A senha deve ter pelo menos 6 caracteres.',
            'senha_confirm.same' => 'As Senhas estão diferentes.',
        ];
    }
}
