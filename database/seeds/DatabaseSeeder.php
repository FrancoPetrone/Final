<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(NivelesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(FavoritosTableSeeder::class);
    }
}
