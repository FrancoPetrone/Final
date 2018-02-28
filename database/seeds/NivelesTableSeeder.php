<?php

use Illuminate\Database\Seeder;

class NivelesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('niveles')->insert([
            'id' => 1,
            'nombre' => "Usuario"
        ]);

        DB::table('niveles')->insert([
            'id' => 2,
            'nombre' => "Administrador"
        ]);
    }
}
