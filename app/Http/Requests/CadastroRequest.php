<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|min:3|max:100',
            'email' => 'required|email|unique:perfil,email',
            'telefone' => ['required', 'regex:/^\(\d{2}\)\d{4,5}-\d{4}$/'],
            'cpf' => ['required', 'min:14', 'max:14', 'unique:perfil,CPF', new CpfValido],
            'data_nascimento' => 'required|date',
            'senha' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 3 caracteres.',
            'nome.max' => 'O nome deve ter no máximo 100 caracteres.',
            'telefone.regex' => 'O telefone deve estar no formato (XX)XXXXX-XXXX.',
            'cpf.unique' => 'O CPF já está cadastrado.',
            'email.unique' => 'O email já está cadastrado.',
            'senha.min' => 'A senha deve ter pelo menos 6 caracteres.',
        ];
    }

    public function authorize()
    {
        return true;
    }

}
