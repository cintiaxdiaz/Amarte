<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function mostrarCarrito(Request $request)
    {
        return $request->all();
    }
}