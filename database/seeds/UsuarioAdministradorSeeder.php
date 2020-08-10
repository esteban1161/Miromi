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
        DB::table('usuarios')->insert([
            'usuario' => '12345678',
            'email'=>'marcela@gmail.com',
            'nombre' => 'Marcela Leyva', 
            'password' => bcrypt('pass123'),
        ]);
        
        DB::table('formularios')->insert([
            'nombre' => 'PerfilTerapeuta ',
            'routeCreate' => '',
            'routeShow' => '',
        ]);
        DB::table('formularios')->insert([
            'nombre' => 'PerfilPaciente ',
            'routeCreate' => '',
            'routeShow' => '',
        ]);
        DB::table('formularios')->insert([
            'nombre' => 'Historia Clinica Basica ',
            'routeCreate' => 'historiaC.create',
            'routeShow' => 'historiaC.show',
            'routeEdit' => 'historiaC.edit',
            'routeDestroy' => 'historiaC.destroy'
        ]);
        DB::table('formularios')->insert([
            'nombre' => 'Historia Blanco',
            'routeCreate' => 'historiaB.create',
            'routeShow' => 'historiaB.show',
            'routeEdit' => 'historiaB.edit',
            'routeDestroy' => 'historiaB.destroy'

        ]);
        DB::table('formularios')->insert([
            'nombre' => 'Historia Homeopatica',
            'routeCreate' => 'historiaH.create',
            'routeShow' => 'historiaH.show',
            'routeEdit' => 'historiaH.edit',
            'routeDestroy' => 'historiaH.destroy'
        ]);
        DB::table('formularios')->insert([
            'nombre' => 'Formulas',
            'routeCreate' => 'historiaF.create',
            'routeShow' => 'historiaF.show',
            'routeEdit' => 'historiaF.edit',
            'routeDestroy' => 'historiaF.destroy'
        ]);

        DB::table('formularios')->insert([
            'nombre' => 'Procedimientos Enfermeria',
            'routeCreate' => 'procedimientosE.create',
            'routeShow' => 'procedimientosE.show',
        ]);
        DB::table('formularios')->insert([
            'nombre' => 'Notas',
            'routeCreate' => null,
            'routeShow' => null,
        ]);

    }
}
