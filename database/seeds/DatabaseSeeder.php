<?php

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
        factory(App\Models\Pais::class, 10)->create();

        $this->truncateTablas([
            'rols',
            'usuarios',
            'usuario_rols',
            'pais',
        ]);
        $this->call(TablaRolSeeder::class);
        $this->call(UsuarioAdministradorSeeder::class);
        factory(App\Models\Pais::class, 10)->create();
        factory(App\Models\Ciudad::class, 10)->create();
    }

    protected function truncateTablas(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0; ');
        foreach($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1; ');

    }
}
