<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function mostrarCompras()
    {
        $compras = Producto::all();
        return view('carrito', compact('compras'));
    }
}