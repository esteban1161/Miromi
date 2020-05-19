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
        /* Meter roles al programa */
        DB::table('usuarios')->insert([
            'usuario' => '80050892',
            'email'=>'juancrojasq@yahoo.es',
            'nombre' => 'Juan Camilo', 
            'password' => bcrypt('pass123'),
        ]);
        DB::table('usuarios')->insert([
            'usuario' => '53177660',
            'email'=>'paomariana.ariaso@gmail.com',
            'nombre' => 'Paola Mariana ', 
            'password' => bcrypt('pass123'),
        ]);
        DB::table('usuarios')->insert([
            'usuario' => '51978034 ',
            'email'=>'fjacky2005@hotmail.com',
            'nombre' => 'Flor Jacqueline ', 
            'password' => bcrypt('pass123'),
        ]);
        DB::table('usuarios')->insert([
            'usuario' => '1015469873',
            'email'=>'esteban.r.901@gmail.com',
            'nombre' => 'Esteban Rojas', 
            'password' => bcrypt('pass123'),
        ]);

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

        DB::table('formularios')->insert([
            'nombre' => 'PerfilTerapeuta ',
        ]);
        DB::table('formularios')->insert([
            'nombre' => 'PerfilPaciente ',
        ]);
        DB::table('formularios')->insert([
            'nombre' => 'HistoriaClinicaBasica ',
        ]);
    }
}
