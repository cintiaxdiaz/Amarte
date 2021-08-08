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
        $list_id = [];
        $diccionario_grande = $request->all();
        $diccionario_cantidades = [];
        $productos = [];

        foreach ($diccionario_grande['productos'] as $diccionario) {
            //agrega
            array_push($list_id, $diccionario['id']);
            $diccionario_cantidades[$diccionario['id']] = $diccionario['cantidad'];
        }

        $productos = Producto::whereIn('id', $list_id)->get();

        $comprar = new Compra;
        $comprar->nombre = "cintia";
        $comprar->rut = "265688578";
        $comprar->direccion = "santiago";
        $comprar->telefono = "+56987015736";
        $comprar->correo = "cin@gmail.com";
        $comprar->subtotal = 0;
        $comprar->costo_envio = 10000;
        $comprar->total = 0;
        $lista_compraProducto = [];

        foreach ($productos as $producto) {

            $compraProduct = new CompraProducto;
            $compraProduct->producto_id = $producto->id;
            $compraProduct->precio = $producto->precio;
            $compraProduct->sku    = $producto->sku;
            $compraProduct->cantidad = $diccionario_cantidades[$producto->id];
            $comprar->subtotal = $comprar->subtotal + $producto->precio * $compraProduct->cantidad;


            array_push($lista_compraProducto, $compraProduct);
        }
        $comprar->total = $comprar->subtotal + $comprar->costo_envio;

        $comprar->save();

        $comprar->compraProductos()->saveMany($lista_compraProducto);



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
            'success_url' => 'http://127.0.0.1:8000/Home',
            'cancel_url' => 'http://127.0.0.1:8000/Home',
        ]);

        return redirect($session->url);





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
    }
}