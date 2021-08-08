<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Compra;
use App\Models\CompraProducto;



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

    public function realizarCompra(Request $request)

    {
        $comprar = new Compra;
        $comprar->nombre = "cintia";
        $comprar->rut = "265688578";
        $comprar->direccion = "santiago";
        $comprar->telefono = "+56987015736";
        $comprar->correo = "cin@gmail.com";
        $comprar->subtotal = 15990;
        $comprar->costo_envio = 10000;
        $comprar->total = 25990;

        $producto1 = new CompraProducto;
        $producto1->producto_id    = 2;
        $producto1->precio = 25000;
        $producto1->sku    = "ctr";

        $producto2 = new CompraProducto;
        $producto2->producto_id    = 3;
        $producto2->precio = 25020;
        $producto2->sku    = "ctr1";


        $comprar->save();

        $comprar->compraProductos()->saveMany([$producto1, $producto2]);
        return [];
    }
}