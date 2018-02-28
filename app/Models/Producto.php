<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillable = [
        'categoria_id', 'nombre', 'descripcion', 'imagen', 'precio', 'stock'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function favoritos(){
        return $this->hasMany(Favorito::class, 'producto_id');
    }
}
