<?php

namespace App\Http\Controllers;

use App\Http\Requests\Usuarios\EditUsuariosRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Nivel;
use App\Models\Favorito;
use Illuminate\Support\Facades\Redirect;

class PanelUsuariosController extends Controller
{
    public function usuarios(){
        $usuarios = User::all();
        return view('panel.usuarios.lista',compact('usuarios'));
    }

    public function editar($id){
        $usuario = User::find($id);
        $niveles = Nivel::all();

        if(is_null($usuario)){
            return PanelUsuariosController::usuarios();
        }

        return view('panel.usuarios.editar',compact('usuario', 'niveles'));
    }

    public function edit(EditUsuariosRequest $request, $id){
        $datos = $request->all();
        $usuario = User::find($id);

        if($usuario){
            $datos['nick'] != $usuario->nick ? $usuario->nick = $datos['nick'] : null;
            $datos['nivel'] != $usuario->nivel_id ? $usuario->nivel_id = $datos['nivel'] : null;
            strcmp($datos['nombre'], $usuario->nombre) ? $usuario->nombre = $datos['nombre'] : null;
            strcmp($datos['apellido'], $usuario->apellido) ? $usuario->apellido = $datos['apellido'] : null;
            strcmp($datos['email'], $usuario->email) ? $usuario->email = $datos['email'] : null;
            !is_null($datos['password']) ? $usuario->password = bcrypt($datos['password']) : null;

            $usuario->save();
        }

        return Redirect::to('panel/usuarios');
    }

    public function delete($id){
        $usuario = User::find($id);

        if($usuario){
            Favorito::where('user_id', $id)->delete();
            $usuario->destroy($id);
        }

        return Redirect::back();
    }
}
