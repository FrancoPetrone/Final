<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick',25);
            $table->string('nombre',50);
            $table->string('apellido',25);
            $table->string('email',150)->unique();
            $table->string('password',255);
            $table->integer('nivel_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('nivel_id')->references('id')->on('niveles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
