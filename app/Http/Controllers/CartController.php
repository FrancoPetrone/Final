<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list(){
        $psdb = Producto::all();
        $psc = session()->get('Carrito');
        $productos = [];

        foreach($psdb as $pdb){
            foreach($psc as $pc){
                if($pdb->id == $pc){
                    array_push($productos, $pdb);
                }
            }
        }

        return view('site.cart', compact('productos'));
    }
}
