<?php

use Illuminate\Database\Seeder;

class PlanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planes')->insert([
            'id' => 1,
            'nomb_plan' => 'Iniciante',
            'precio' => 150000,
            'cant_dispositivos' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('planes')->insert([
            'id' => 2,
            'nomb_plan' => 'Emprendedor',
            'precio' => 250000,
            'cant_dispositivos' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
