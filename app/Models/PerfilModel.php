<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilModel extends Model
{
    protected $table = "perfil";

    // Constantes para as permissões
    const CLIENTE = 1;
    const FUNCIONARIO = 2;
    const ADMINISTRADOR = 3;
    const SUPER_ADMINISTRADOR = 4;

    public static function permissoes()
    {
        return [
            'Visitante' => self::CLIENTE,
            'Cliente' => self::FUNCIONARIO,
            'Administrador' => self::ADMINISTRADOR,
            'Super_Administrador' => self::SUPER_ADMINISTRADOR
        ];
    }
}
