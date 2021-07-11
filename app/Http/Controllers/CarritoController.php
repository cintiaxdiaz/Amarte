<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function mostrarCarrito(Request $request)
    {
        $list_id = [];
        $diccionario_grande = $request->all();
        $diccionario_cantidades = [];
        $productos = [];
        if (!isset($diccionario_grande['productos'])) {
            return view('carrito', compact('productos', 'diccionario_cantidades'));
        } 
        foreach ($diccionario_grande['productos'] as $diccionario) {
            //agrega
            array_push($list_id, $diccionario['id']);
            $diccionario_cantidades[$diccionario['id']] = $diccionario['cantidad'];
        }

        $productos = Producto::whereIn('id', $list_id)->get();

        return view('carrito', compact('productos', 'diccionario_cantidades'));
    }
}