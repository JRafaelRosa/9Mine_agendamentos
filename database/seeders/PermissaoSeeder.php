<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use App\Models\PerfilModel;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('permissao')->insert([
            ['nome' => 'Cliente'],
            ['nome' => 'Funcionario'],
            ['nome' => 'Administrador'],
            ['nome' => 'Super Administrador'],
        ]);
    }
}
