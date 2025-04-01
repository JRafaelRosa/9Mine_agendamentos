<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UsuarioModel;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UsuarioModel::create([
            'nome' => 'cliente',
            'email' => 'cliente@gmail.com',
            'telefone' => '999999999',
            'cpf' => '12345678900',
            'permissao_id' => 1,
            'senha' => 'teste',
            'data_nascimento' => date('1980-10-30')
        ]);

        UsuarioModel::create([
            'nome' => 'funcionario',
            'email' => 'funcionario@gmail.com',
            'telefone' => '999999991',
            'cpf' => '12345678901',
            'permissao_id' => 2,
            'senha' => 'teste',
            'data_nascimento' => date('2009-04-08')
        ]);

        UsuarioModel::create([
            'nome' => 'admin',
            'email' => 'adim@gmail.com',
            'telefone' => '999999992',
            'cpf' => '12345678902',
            'permissao_id' => 3,
            'senha' => 'teste',
            'data_nascimento' => date('2006-11-11')
        ]);

        UsuarioModel::create([
            'nome' => 'super admin',
            'email' => 'superadim@gmail.com',
            'telefone' => '999999993',
            'cpf' => '12345678903',
            'permissao_id' => 4,
            'senha' => 'teste',
            'data_nascimento' => date('2005-02-16')
        ]);
    }
}
