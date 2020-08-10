<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Menus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Menus de Menu-ROL */
        DB::table('menus')->insert([
            'menu_id' => 0,
            'nombre' => 'Menu-Rol',
            'url' => 'admin/menu-rol',
            'orden' => 1,
            'icono' => 'fas fa-clipboard-check',
        ]);
        DB::table('menu_rols')->insert([
            'rol_id' => 1,
            'menu_id' => 1,
        ]);

        /* Menus de Menu*/
        DB::table('menus')->insert([
            'menu_id' => 0,
            'nombre' => 'Menus',
            'url' => 'admin/menu/#',
            'orden' => 1,
            'icono' => 'fas fa-stream',
        ]);
        DB::table('menus')->insert([
            'menu_id' => 2,
            'nombre' => 'Lista Menus',
            'url' => 'admin/menu',
            'orden' => 1,
            'icono' => 'fas fa-clipboard-list',
        ]);
        DB::table('menus')->insert([
            'menu_id' => 2,
            'nombre' => 'Crear Menus',
            'url' => 'admin/menu/crear',
            'orden' => 1,
            'icono' => 'fas fa-plus-circle',
        ]);

        /* Menus de Menu*/
        DB::table('menus')->insert([
            'menu_id' => 0,
            'nombre' => 'Usuarios',
            'url' => 'admin/usuario/#',
            'orden' => 1,
            'icono' => 'fas fa-user',
        ]);
        DB::table('menus')->insert([
            'menu_id' => 5,
            'nombre' => 'Lista Usuarios',
            'url' => 'admin/usuario',
            'orden' => 1,
            'icono' => 'fas fa-users',
        ]);
        DB::table('menus')->insert([
            'menu_id' => 5,
            'nombre' => 'Crear Usuario',
            'url' => 'admin/usuario/crear',
            'orden' => 1,
            'icono' => 'fas fa-user-plus',
        ]);

        /* Menus de Pacientes */
        DB::table('menus')->insert([
            'menu_id' => 0,
            'nombre' => 'Pacientes',
            'url' => 'paciente/#',
            'orden' => 1,
            'icono' => 'fas fa-user-injured',
        ]);
        DB::table('menus')->insert([
            'menu_id' => 8,
            'nombre' => 'Lista Pacientes',
            'url' => 'paciente',
            'orden' => 1,
            'icono' => 'fas fa-clipboard-list',
        ]);
        DB::table('menus')->insert([
            'menu_id' => 8,
            'nombre' => 'Crear Pacientes',
            'url' => 'paciente/crear',
            'orden' => 1,
            'icono' => 'fas fa-user-plus',
        ]);

        /* Menus de Auxiliar */
        DB::table('menus')->insert([
            'menu_id' => 0,
            'nombre' => 'Auxiliar',
            'url' => 'auxiliar/paciente',
            'orden' => 1,
            'icono' => 'fas fa-ambulance',
        ]);

        /* Menus de Rips */
        DB::table('menus')->insert([
            'menu_id' => 0,
            'nombre' => 'Rips',
            'url' => 'rips',
            'orden' => 1,
            'icono' => 'fas fa-file-medical-alt',
        ]);

        /* Menus de Auxiliar */
        DB::table('menus')->insert([
            'menu_id' => 0,
            'nombre' => 'Procedimientos',
            'url' => 'procedimientosEnfermeria',
            'orden' => 1,
            'icono' => 'fas fa-procedures',
        ]);

    }
}
