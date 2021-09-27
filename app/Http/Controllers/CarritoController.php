<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Compra;
use App\Models\CompraProducto;
use Stripe\Stripe;
use Stripe\Checkout\Session;

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
        $listaDeid = [];
        $productosEinformaciones = $request->all(); //asigna una variable al formulario
        $diccionario_cantidades = []; // cantidad de cada producto
        $productos = [];

        foreach ($productosEinformaciones['productos'] as $productoDeformulario) { //productos del formulario, lo asigna a 
            //diccionario
            //agrega a la lista los id del formulario
            array_push($listaDeid, $productoDeformulario['id']);
            $diccionario_cantidades[$productoDeformulario['id']] = $productoDeformulario['cantidad'];
        }
        //pasa los a id del formulario a la bbdd (query), obtiene datos de los productos

        $productos = Producto::whereIn('id', $listaDeid)->get();
        //asigna variable a una nuev compra y se obtienen los datos solicitados del formulario
        $comprar = new Compra;
        $lista_compraProducto = [];

        //se asigna una variable a una nueva compra producto
        foreach ($productos as $producto) {
            $compraProduct = new CompraProducto;
            $compraProduct->producto_id = $producto->id;
            $compraProduct->precio = $producto->precio;
            $compraProduct->sku    = $producto->sku;
            $compraProduct->cantidad = $diccionario_cantidades[$producto->id];
            $comprar->subtotal = $comprar->subtotal + $producto->precio * $compraProduct->cantidad;

            //agrega compra product a la lista
            array_push($lista_compraProducto, $compraProduct);
        }

        $comprar->nombre = $productosEinformaciones['nombre'];
        $comprar->rut = $productosEinformaciones['rut'];
        $comprar->direccion = $productosEinformaciones['direccion'];
        $comprar->telefono = $productosEinformaciones['telefono'];
        $comprar->correo = $productosEinformaciones['correo'];
        $comprar->region = $productosEinformaciones['region'];

        $comprar->costo_envio = 10000;

        $comprar->total = $comprar->subtotal + $comprar->costo_envio;
        $comprar->save();
        //guarda compra en table compra produtos y que guarde todo lo que esta en la lista
        $comprar->compraProductos()->saveMany($lista_compraProducto);
        //integracion con stripe // codigo de seguridad asignado por stripe
        Stripe::setApiKey('sk_test_51JMJp6FJ4vqwVcqEeVNo9dH3pwEYAk3erOEr6KDkxKgkGiPWnG4vQZxvuH6YMvgmyLwXPeOO8b5FQDZm4FkQB71x00PMLaqjsR');

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'clp',
                    'product_data' => [
                        'name' => 'Compra Amarte',
                    ],
                    'unit_amount' => $comprar->total,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            //cocatena con el id de la compra
            'success_url' => 'http://127.0.0.1:8000/pagoExitoso/' . $comprar->id,
            'cancel_url' => 'http://127.0.0.1:8000/pagoRechazado/' . $comprar->id,
        ]);

        return redirect($session->url);
    }
}