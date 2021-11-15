<?php

use Illuminate\Database\Seeder;

class LocalizacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localizaciones')->insert([
            'id' => 1,
            'direccion' => 'km 3 via calera casa 08 - 72',
            'id_ciudad' => 107,
            'id_usuario' => 2,
            'id_plan' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
