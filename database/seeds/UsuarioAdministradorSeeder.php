<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'usuario' => 'medico_admin',
            'nombre' => 'Administrador', 
            'password' => bcrypt('pass123'),
        ]);

        DB::table('usuario_rols')->insert([
            'rols_id' => 1,
            'usuarios_id' => 1,
            'estado' => true,
        ]);
    }
}
