<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\home;
use App\Models\Producto;


class ProductosController extends Controller
{


    public function mostrarProductos()
    {
        $productos = Producto::all();

        return view('productos', compact('productos'));
    }

    public function mostrarsingleProducto($id)
    {
        $producto = Producto::find(intval($id));

        return view('singleProducto', compact('producto'));
    }
}