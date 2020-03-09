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
            'usuario' => 'medicoA',
            'nombre' => 'Administrador', 
            'password' => bcrypt('pass123'),
        ]);
        DB::table('usuarios')->insert([
            'usuario' => 'rat ',
            'nombre' => 'roosvelt ', 
            'password' => bcrypt('pass123'),
        ]);

        DB::table('usuario_rols')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => true,
        ]);
        DB::table('usuario_rols')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => true,
        ]);
    }
}
