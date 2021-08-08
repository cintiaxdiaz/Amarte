<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\Contacto;


class ContactoController extends Controller
{
    public function mostrarContacto()
    {
        return view('contacto');
    }
}