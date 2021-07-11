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

Route::get('/', function () {
    return redirect('/Home');
});