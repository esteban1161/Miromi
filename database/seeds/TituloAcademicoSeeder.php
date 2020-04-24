<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TituloAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulo_academicos')->insert([
            'titulo' => 'Medico General',
            'descripcion' => ''
        ]);
        DB::table('titulo_academicos')->insert([
            'titulo' => 'Medico Cirujano',
            'descripcion' => ''
        ]);
        DB::table('titulo_academicos')->insert([
            'titulo' => 'Medico Magister en medicinas alternativas - Homeopatia',
            'descripcion' => ''
        ]);
        DB::table('titulo_academicos')->insert([
            'titulo' => 'Medico Magister en medicinas alternativas - Acupuntura',
            'descripcion' => ''
        ]);
        DB::table('titulo_academicos')->insert([
            'titulo' => 'Medico Magister en medicinas alternativas - Osteopatia',
            'descripcion' => ''
        ]);
        DB::table('titulo_academicos')->insert([
            'titulo' => 'Medico Magister en medicinas alternativas - Terapia Neural',
            'descripcion' => ''
        ]);
        DB::table('titulo_academicos')->insert([
            'titulo' => 'Medico Especialista en terapeuticas alternativas y farmacologia vegetal',
            'descripcion' => ''
        ]);
    }
}
