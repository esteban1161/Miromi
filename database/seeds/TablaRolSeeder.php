<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'editor',
            'supervisor',
            'terapeuta',
        ];
        foreach($rols as $key => $value){
            DB::table('rols')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format('y-m-d H:i:s')
            ]);
        }
    }
}
