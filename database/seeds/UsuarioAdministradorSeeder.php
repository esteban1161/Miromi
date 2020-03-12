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
            'usuario' => 'medicoA',
            'email'=>'rat90@gmail.com',
            'nombre' => 'Administrador', 
            'password' => bcrypt('pass123'),
        ]);
        DB::table('usuarios')->insert([
            'usuario' => 'rat ',
            'email'=>'rat91@gmail.com',
            'nombre' => 'Editor ', 
            'password' => bcrypt('pass123'),
        ]);
        DB::table('usuarios')->insert([
            'usuario' => 'leon ',
            'email'=>'rat92@gmail.com',
            'nombre' => 'Supervisor ', 
            'password' => bcrypt('pass123'),
        ]);
        DB::table('usuarios')->insert([
            'usuario' => 'vaca ',
            'email'=>'rat93@gmail.com',
            'nombre' => 'Terapeuta ', 
            'password' => bcrypt('pass123'),
        ]);

        /* Meter usuarios rol al programa */
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
        DB::table('usuario_rols')->insert([
            'rol_id' => 3,
            'usuario_id' => 3,
            'estado' => true,
        ]);
        DB::table('usuario_rols')->insert([
            'rol_id' => 4,
            'usuario_id' => 4,
            'estado' => true,
        ]);
        DB::table('menus')->insert([
            'menu_id' => 1,
            'nombre' => 'Menus',
            'url' => 'admin/menu',
            'icono'=>'fa-plus-square',            
        ]);
        DB::table('menus')->insert([
            'menu_id' => 2,
            'nombre' => 'Menu-crear',
            'url' => 'admin/menu/crear',
            'orden'=>1,    
            'icono'=>'fa-plus-square',        
        ]);
        DB::table('menus')->insert([
            'menu_id' => 3,
            'nombre' => 'Menu-crear',
            'url' => 'admin/menu-rol',          
            'icono'=>'fa-plus-square'  
        ]);
    }
}
