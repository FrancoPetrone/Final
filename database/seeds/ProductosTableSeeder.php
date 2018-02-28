<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    public function run()
    {
        // Categoria: PC

        DB::table('productos')->insert([
            'id' => 1,
            'categoria_id' => 1,
            'nombre' => "PC Infinity",
            'descripcion' => "Economica",
            'imagen' => "imgs/Productos/pc/1.png",
            'precio' => 7000,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 2,
            'categoria_id' => 1,
            'nombre' => "PC Gamer Pro",
            'descripcion' => "Potencia",
            'imagen' => "imgs/Productos/pc/2.png",
            'precio' => 11000,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 3,
            'categoria_id' => 1,
            'nombre' => "PC Blacking",
            'descripcion' => "Velocidad",
            'imagen' => "imgs/Productos/pc/3.png",
            'precio' => 9000,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 4,
            'categoria_id' => 1,
            'nombre' => "PC Blue",
            'descripcion' => "Economica",
            'imagen' => "imgs/Productos/pc/4.png",
            'precio' => 6500,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 5,
            'categoria_id' => 1,
            'nombre' => "PC Inno",
            'descripcion' => "Trabajo",
            'imagen' => "imgs/Productos/pc/5.png",
            'precio' => 8700,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 6,
            'categoria_id' => 1,
            'nombre' => "PC Gamer",
            'descripcion' => "Fire Fire!",
            'imagen' => "imgs/Productos/pc/6.png",
            'precio' => 9400,
            'stock' => 20
        ]);

        // Categoria: NOTEBOOKS

        DB::table('productos')->insert([
            'id' => 7,
            'categoria_id' => 2,
            'nombre' => "Notebook Exo",
            'descripcion' => "Economica",
            'imagen' => "imgs/Productos/notebooks/7.png",
            'precio' => 8700,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 8,
            'categoria_id' => 2,
            'nombre' => "Notebook HP",
            'descripcion' => "Trabajo",
            'imagen' => "imgs/Productos/notebooks/8.png",
            'precio' => 9000,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 9,
            'categoria_id' => 2,
            'nombre' => "Notebook Dell",
            'descripcion' => "Potencia",
            'imagen' => "imgs/Productos/notebooks/9.png",
            'precio' => 12000,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 10,
            'categoria_id' => 2,
            'nombre' => "Notebook Asus",
            'descripcion' => "Economica",
            'imagen' => "imgs/Productos/notebooks/10.png",
            'precio' => 7800,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 11,
            'categoria_id' => 2,
            'nombre' => "Notebook HP",
            'descripcion' => "Economica",
            'imagen' => "imgs/Productos/notebooks/11.png",
            'precio' => 9800,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 12,
            'categoria_id' => 2,
            'nombre' => "Notebook Asus",
            'descripcion' => "Trabajo",
            'imagen' => "imgs/Productos/notebooks/12.png",
            'precio' => 11500,
            'stock' => 20
        ]);

        // Categoria: PERIFERICOS

        DB::table('productos')->insert([
            'id' => 13,
            'categoria_id' => 3,
            'nombre' => "Kit Pro",
            'descripcion' => "Gamer",
            'imagen' => "imgs/Productos/perifericos/13.png",
            'precio' => 1000,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 14,
            'categoria_id' => 3,
            'nombre' => "Kit Job",
            'descripcion' => "Trabajo",
            'imagen' => "imgs/Productos/perifericos/14.png",
            'precio' => 850,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 15,
            'categoria_id' => 3,
            'nombre' => "Mouse Razer",
            'descripcion' => "Gamer",
            'imagen' => "imgs/Productos/perifericos/15.png",
            'precio' => 650,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 16,
            'categoria_id' => 3,
            'nombre' => "Webcam",
            'descripcion' => "Economica",
            'imagen' => "imgs/Productos/perifericos/16.png",
            'precio' => 450,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 17,
            'categoria_id' => 3,
            'nombre' => "Teclado Black",
            'descripcion' => "Economica",
            'imagen' => "imgs/Productos/perifericos/17.png",
            'precio' => 380,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 18,
            'categoria_id' => 3,
            'nombre' => "Mouse Blue",
            'descripcion' => "Economica",
            'imagen' => "imgs/Productos/perifericos/18.png",
            'precio' => 250,
            'stock' => 20
        ]);

        // Categoria: COMPONENTES

        DB::table('productos')->insert([
            'id' => 19,
            'categoria_id' => 4,
            'nombre' => "MSI Armor",
            'descripcion' => "Graphics",
            'imagen' => "imgs/Productos/componentes/19.png",
            'precio' => 4320,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 20,
            'categoria_id' => 4,
            'nombre' => "Provid",
            'descripcion' => "Graphics",
            'imagen' => "imgs/Productos/componentes/20.png",
            'precio' => 3400,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 21,
            'categoria_id' => 4,
            'nombre' => "MSI Pro",
            'descripcion' => "Motherboard",
            'imagen' => "imgs/Productos/componentes/21.png",
            'precio' => 7400,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 22,
            'categoria_id' => 4,
            'nombre' => "Gygabyte",
            'descripcion' => "Motherboard",
            'imagen' => "imgs/Productos/componentes/22.png",
            'precio' => 9400,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 23,
            'categoria_id' => 4,
            'nombre' => "MSI Aero",
            'descripcion' => "Graphics",
            'imagen' => "imgs/Productos/componentes/23.png",
            'precio' => 5500,
            'stock' => 20
        ]);

        DB::table('productos')->insert([
            'id' => 24,
            'categoria_id' => 4,
            'nombre' => "Asus M5",
            'descripcion' => "Motherboard",
            'imagen' => "imgs/Productos/componentes/24.png",
            'precio' => 8000,
            'stock' => 20
        ]);
    }
}
