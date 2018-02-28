<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nick', 'nombre', 'apellido', 'email', 'password', 'nivel_id'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function favoritos(){
        return $this->hasMany(Favorito::class, 'user_id');
    }

    public function nivel(){
        return $this->hasOne(Nivel::class, 'id');
    }
}
