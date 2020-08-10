<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolsFormularios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Meter usuarios rol al programa */
        DB::table('usuario_rols')->insert([
            'rol_id' => 2,
            'usuario_id' => 1,
            
        ]);
        DB::table('usuario_rols')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
        
        ]);
        DB::table('usuario_rols')->insert([
            'rol_id' => 2,
            'usuario_id' => 3,
        
        ]);
        DB::table('usuario_rols')->insert([
            'rol_id' => 1,
            'usuario_id' => 4,
        ]);
        DB::table('usuario_rols')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
        ]);
        DB::table('usuario_rols')->insert([
            'rol_id' => 4,
            'usuario_id' => 5,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 3,
            'usuario_id' => 1,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 4,
            'usuario_id' => 1,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 5,
            'usuario_id' => 1,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 3,
            'usuario_id' => 2,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 4,
            'usuario_id' => 2,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 5,
            'usuario_id' => 2,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 3,
            'usuario_id' => 3,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 4,
            'usuario_id' => 3,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 5,
            'usuario_id' => 3,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 3,
            'usuario_id' => 4,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 4,
            'usuario_id' => 4,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 5,
            'usuario_id' => 4,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 6,
            'usuario_id' => 4,
        ]);
        DB::table('usuarios_formularios')->insert([
            'formularios_id' => 6,
            'usuario_id' => 5,
        ]);
    }
}
