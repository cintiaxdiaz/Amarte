<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('Hola', function () {
    return ('Hola mundo');
});


Route::get('Home', 'App\Http\Controllers\HomeController@mostrarHome');

Route::get('genial', 'App\Http\Controllers\HomeController@mostrarGenial');

Route::get('Productos', 'App\Http\Controllers\ProductosController@mostrarProductos');

Route::get('singleProducto/{id}', 'App\Http\Controllers\ProductosController@mostrarsingleProducto');

Route::post('carrito', 'App\Http\Controllers\CarritoController@mostrarCarrito');

/*
Route::get('usuarios/{nombre}', function ($nombre) {
    return 'los usuarios ' . $nombre;
});
//PASANDO POR EL PRIMER NOMNRE
Route::get('carrito', function () {
    $nombre = 'cintia';
    return view('carrito', compact('nombre'));
});*/

//PASANDO CON SELECCION DE ID IDENTIICADO

/*Route::get('producto', function () {
    $product = App\Models\Producto::find(2);
    echo $product->nombre;
});

//PASANDO POR URL

Route::get('producto/{id}', function ($id) {
    $product = App\Models\Producto::find($id);
    echo $product->nombre;
});
//url 
Route::get('producto_nombre', function () {
    $product = App\Models\Producto::where('nombre', '=', 'bandana')->first();
    echo $product->nombre;
});*/


//Route::get('carritos', 'App\Http\Controllers\CarritoController@mostrarCompras');