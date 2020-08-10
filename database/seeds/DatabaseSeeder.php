<?php

use App\Models\Seguridad\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([            
            'pais',
            'ciudads',
            'rols',
            'titulo_academicos',
            'usuarios',
            'usuario_rols',
            'formularios',
            'usuarios_formularios',
            'menus'
        ]);
        $this->call(TablaRolSeeder::class);
        $this->call(TituloAcademicoSeeder::class);
        $this->call(UsuarioAdministradorSeeder::class);
        $this->call(RolsFormularios::class);
        $this->call(Menus::class);
    }

    protected function truncateTablas(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0; ');
        foreach($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1; ');

    }
}
