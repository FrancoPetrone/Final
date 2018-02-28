<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            'id' => 1,
            'nombre' => "pc",
            'imagen' => "imgs/Categoria/Pc.png"
        ]);

        DB::table('categorias')->insert([
            'id' => 2,
            'nombre' => "notebooks",
            'imagen' => "imgs/Categoria/Notebooks.png"
        ]);

        DB::table('categorias')->insert([
            'id' => 3,
            'nombre' => "perifericos",
            'imagen' => "imgs/Categoria/Perifericos.png"
        ]);

        DB::table('categorias')->insert([
            'id' => 4,
            'nombre' => "componentes",
            'imagen' => "imgs/Categoria/Componentes.png"
        ]);
    }
}
