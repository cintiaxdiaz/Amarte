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
        $categoriasQuery = [];
        if ($stringCategoria) {
            $categoriasQuery = explode(',', $stringCategoria);
            $query = $query->whereIn('categoria_id', $categoriasQuery);
        }

        $minPrecio = $request->get('minprecio');

        if ($minPrecio && is_numeric($minPrecio)) {
            $query = $query->where('precio', '>', $minPrecio);
        }

        $maxPrecio = $request->get('maxprecio');

        if ($maxPrecio && is_numeric($maxPrecio)) {
            $query = $query->where('precio', '<', $maxPrecio);
        }

        $nombreProducto = $request->get('nombreproducto');

        if ($nombreProducto) {
            $query = $query->where('nombre', 'like', '%' . $nombreProducto . '%');
        }

        $productos = $query->get();

        return view('productos', compact('productos', 'nombreProducto', 'categoriasQuery'));
    }

    public function mostrarsingleProducto($id)
    {
        $producto = Producto::find(intval($id));

        return view('singleProducto', compact('producto'));
    }
}