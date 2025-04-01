<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;

class UsuarioModel extends Model implements Authenticatable
{
    protected $table = 'perfil';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cpf',
        'permissao_id',
        'data_nascimento',
        'senha'
    ];

    // Mutator para criptografar a senha automaticamente
    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = Hash::make($value);
    }

    /**
     * Método obrigatório da interface Authenticatable
     */
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    /**
     * Método obrigatório da interface Authenticatable
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Método obrigatório da interface Authenticatable
     */
    public function getAuthPassword()
    {
        return $this->senha;
    }

    /**
     * Método obrigatório da interface Authenticatable
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Método obrigatório da interface Authenticatable
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Método obrigatório da interface Authenticatable
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    /**
     * Método obrigatório da interface Authenticatable
     */
    public function getAuthPasswordName()
    {
        return 'senha';
    }
}
