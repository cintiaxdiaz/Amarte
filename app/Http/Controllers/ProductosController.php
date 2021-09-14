<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\home;
use App\Models\Producto;


class ProductosController extends Controller
{


    public function mostrarProductos(Request $request)
    {

        $query = Producto::query();
        $stringCategoria = $request->get('categorias');
        if ($stringCategoria) {
            $categorias = explode(',', $stringCategoria);
            $query = $query->whereIn('categoria_id', $categorias);
        }

        $minPrecio = $request->get('minprecio');

        if ($minPrecio && is_numeric($minPrecio)) {
            $query = $query->where('precio', '>', $minPrecio);
        }

        $maxPrecio = $request->get('maxprecio');

        if ($maxPrecio && is_numeric($maxPrecio)) {
            $query = $query->where('precio', '<', $maxPrecio);
        }

        $productos = $query->get();

        return view('productos', compact('productos'));
    }

    public function mostrarsingleProducto($id)
    {
        $producto = Producto::find(intval($id));

        return view('singleProducto', compact('producto'));
    }
}