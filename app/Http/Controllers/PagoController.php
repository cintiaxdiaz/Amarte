<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\home;
use App\Models\Compra;



class PagoController extends Controller
{
    public function mostrarPagoExitoso($id)
    {
        $compra = Compra::find(intval($id));
        return view('pagoExitoso', compact('compra'));
    }
}