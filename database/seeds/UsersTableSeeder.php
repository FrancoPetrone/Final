<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'nick' => "Usuario",
            'nombre' => "User Nombre",
            'apellido' => "User Apellido",
            'email' => "user_email@hotmail.com",
            'password' => bcrypt("1234"),
            'nivel_id' => 1
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'nick' => "Admin",
            'nombre' => "Admin Nombre",
            'apellido' => "Admin Apellido",
            'email' => "admin_email@hotmail.com",
            'password' => bcrypt("1234"),
            'nivel_id' => 2
        ]);
    }
}
