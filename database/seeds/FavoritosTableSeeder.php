<?php

use Illuminate\Database\Seeder;

class FavoritosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('favoritos')->insert([
            'id' => 1,
            'user_id' => 1,
            'producto_id' => 1
        ]);

        DB::table('favoritos')->insert([
            'id' => 2,
            'user_id' => 1,
            'producto_id' => 15
        ]);

        DB::table('favoritos')->insert([
            'id' => 3,
            'user_id' => 1,
            'producto_id' => 20
        ]);
    }
}
