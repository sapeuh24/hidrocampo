<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'nombre' => 'Oscar',
            'apellidos' => 'Arias',
            'email' => 'oscararias@hotmail.com',
            'telefono' => 3252525252,
            'password' => bcrypt('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'nombre' => 'Johan',
            'apellidos' => 'Ibarra',
            'email' => 'johanibarra@hotmail.com',
            'telefono' => 3252525252,
            'password' => bcrypt('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
