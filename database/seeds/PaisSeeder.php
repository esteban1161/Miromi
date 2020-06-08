<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pais')->insert([
            'nombrePais' => 'Colombia',
            'indicativo' => 'C0l',
        ]);

        DB::table('pais')->insert([
            'nombrePais' => 'Brazil',
            'indicativo' => 'B4Z',
        ]);

        DB::table('pais')->insert([
            'nombrePais' => 'Mexico',
            'indicativo' => 'M3X',
        ]);

        DB::table('ciudads')->insert([
            'pais_id' => 1,
            'nombreCiudad' => 'Bogota',
        ]);
        DB::table('ciudads')->insert([
            'pais_id' => 1,
            'nombreCiudad' => 'Cali',
        ]);
        DB::table('ciudads')->insert([
            'pais_id' =>  1,
            'nombreCiudad' => 'Cartagena',
        ]);
        DB::table('ciudads')->insert([
            'pais_id' => 2,
            'nombreCiudad' => 'Brazilia',
        ]);
        DB::table('ciudads')->insert([
            'pais_id' => 2,
            'nombreCiudad' => 'Rio de Janeiro',
        ]);
        DB::table('ciudads')->insert([
            'pais_id' => 3,
            'nombreCiudad' => 'Ciudad de Mexico',
        ]);
    }
}
