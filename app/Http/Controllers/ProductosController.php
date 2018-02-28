<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{
    public function all(){
        $productos = Producto::all();
        $categoria = 'todos';

        $favoritos = [];
        if(session()->get('Level') != 0){
            $favoritos = Favorito::all()->where('user_id', Auth::user()->id);
        }

        return view('site.productos',compact('productos', 'categoria', 'favoritos'));
    }

    public function checkCategory($category){
        $categorias = [[0, 'todos'], [1,'pc'], [2,'notebooks'], [3,'perifericos'], [4,'componentes']];

        foreach($categorias as $c){
            if(!strcmp($category, $c[1])){
                return ['id' => $c[0], 'categoria' => $c[1]];
            }
        }

        return ProductosController::all();
    }

    public function categoria($category){
        $checkCategory = ProductosController::checkCategory($category);
        $categoria = $checkCategory['categoria'];

        $favoritos = [];
        if(session()->get('Level') != 0){
            $favoritos = Favorito::all()->where('user_id', Auth::user()->id);
        }

        if($checkCategory['id'] != 0){
            $productos = Producto::all()->where('categoria_id', $checkCategory['id']);
        }else{
            $productos = Producto::all();
        }
        return view('site.productos',compact('productos', 'categoria', 'favoritos'));
    }

    public function addcart($id){
        $productos = Producto::all();

        foreach($productos as $p){
            if($p->id === intval($id)){
                $carrito = session()->get('Carrito');
                array_push($carrito, $p->id);
                session(['Carrito' => $carrito]);
            }
        }

        return Redirect::back();
    }

    public function delcart($id){

        foreach(session()->get('Carrito') as $p){
            if($p === intval($id)){
                $carrito = session()->get('Carrito');
                $pos = array_search(intval($id), $carrito);
                array_splice($carrito, $pos, 1);
                session(['Carrito' => $carrito]);
                break;
            }
        }

        return Redirect::back();
    }

}
