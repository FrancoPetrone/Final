<?php

namespace App\Http\Controllers;

use App\Http\Requests\Productos\CreateProductosRequest;
use App\Http\Requests\Productos\EditProductosRequest;
use App\Models\Categoria;
use App\Models\Favorito;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PanelProductosController extends Controller
{
    public function productos(){
        $productos = Producto::all();
        return view('panel.productos.lista',compact('productos'));
    }

    public function nuevo(){
        $categorias = Categoria::all();
        return view('panel.productos.nuevo',compact('categorias'));
    }

    public function editar($id){
        $producto = Producto::find($id);
        $categorias = Categoria::all();

        if(is_null($producto)){
            return PanelProductosController::productos();
        }

        return view('panel.productos.editar',compact('producto', 'categorias'));
    }

    public function create(CreateProductosRequest $request){
        $datos = $request->all();
        $categoria = Categoria::find($datos['categoria_id']);

        $new_path = 'tecno/imgs/Productos/'.$categoria->nombre; // Nueva ubicacion de la imagen
        $random_name = rand(10000000, 99999999).'.'.$request->imagen->getClientOriginalExtension(); // Generar nombre aleatorio
        $request->imagen->move($new_path, $random_name); // Mover la imagen desde storage al directorio correcto
        $url_db = 'imgs/Productos/'.$categoria->nombre.'/'.$random_name; // URL de la imagen a guardar
        $datos['imagen'] = $url_db; // URL

        Producto::create($datos);

        return PanelProductosController::productos();
    }

    public function edit(EditProductosRequest $request, $id){
        $datos = $request->all();
        $producto = Producto::find($id);

        if($producto){
            // Verificar datos editados
            strcmp($datos['nombre'], $producto->nombre) ? $producto->nombre = $datos['nombre'] : null;
            strcmp($datos['descripcion'], $producto->descripcion) ? $producto->descripcion = $datos['descripcion'] : null;
            $datos['precio'] != $producto->precio ? $producto->precio = $datos['precio'] : null;
            $datos['stock'] != $producto->stock ? $producto->stock = $datos['stock'] : null;

            // Verificar cambio de categoria
            if($datos['categoria_id'] != $producto->categoria_id){
                $categorias = [1 =>'pc', 2 =>'notebooks', 3 =>'perifericos', 4 =>'componentes'];
                $old_path = './tecno/'.$producto->imagen; // Directorio Actual
                $nombre = substr($old_path, 24+strlen($producto->categoria->nombre)); // Obtener nombre imagen
                $new_path = './tecno/imgs/Productos/'.$categorias[$datos['categoria_id']].'/'.$nombre; // Nuevo Directorio
                if(file_exists($old_path)){ // Si existe el archivo en el directorio
                    rename($old_path, $new_path); // Trasladar el archivo
                    $producto->categoria_id = $datos['categoria_id']; // Actualizar categoria
                    $url_db = 'imgs/Productos/'.$categorias[$datos['categoria_id']].'/'.$nombre; // URL de la imagen a guardar
                    $producto->imagen = $url_db; // Actualizacion de URL
                }
            }

            // Verificar cambio de imagen
            if(isset($datos['imagen'])){
                $new_path = 'tecno/imgs/Productos/'.$producto->categoria->nombre; // Nueva ubicacion de la imagen
                $random_name = rand(10000000, 99999999).'.'.$request->imagen->getClientOriginalExtension(); // Generar nombre aleatorio
                $request->imagen->move($new_path, $random_name); // Mover la imagen desde storage al directorio correcto
                $url_db = 'imgs/Productos/'.$producto->categoria->nombre.'/'.$random_name; // URL de la imagen a guardar
                $producto->imagen = $url_db; // Actualizacion de URL
            }

            $producto->save();
        }
        return Redirect::to('panel/productos');
    }

    public function delete($id){
        $producto = Producto::find($id);

        if($producto){
            Favorito::where('producto_id', $id)->delete();
            unlink('tecno/'.$producto->imagen);
            $producto->destroy($id);
        }

        return Redirect::back();
    }
}
