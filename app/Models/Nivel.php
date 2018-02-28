<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = "niveles";

    protected $fillable = [
        'nombre'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nivel_id');
    }
}
