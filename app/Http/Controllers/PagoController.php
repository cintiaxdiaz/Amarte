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
        $compra->estado = 'PAGADO';
        $compra->save();

        return view('pagoExitoso', compact('compra'));
    }

    public function mostrarPagoRechazado($id)
    {
        $compra = Compra::find(intval($id));
        $compra->estado = 'RECHAZADO';
        $compra->save();
        return view('pagoRechazado', compact('compra'));
    }
}