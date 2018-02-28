<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Favoritos\CreateFavoritosRequest;
use App\Http\Requests\Favoritos\DeleteFavoritosRequest;
use Illuminate\Support\Facades\Redirect;

class FavoritosController extends Controller
{
    public function list(){
        $favoritos = Favorito::with('producto')->where('user_id', '=', Auth::user()->id)->get();
        return view('site.favoritos',compact('favoritos'));
    }

    public function addfav(CreateFavoritosRequest $request){
        $datos = $request->all();
        $datos['user_id'] = Auth::user()->id;
        $datos['producto_id'] = intval($datos['producto_id']);

        Favorito::create($datos);

        return Redirect::back();
    }

    public function delfav(DeleteFavoritosRequest $request){
        $datos = $request->all();

        $favorito = Favorito::all()->where('user_id', '=', Auth::user()->id)->where('producto_id', '=', intval($datos['producto_id']));

        $id = null;
        foreach ($favorito as $fav){
            $id = $fav->id;
        }
        Favorito::destroy($id);

        return Redirect::back();
    }
}
