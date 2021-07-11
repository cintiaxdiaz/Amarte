<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\home;
use App\Models\Producto;


class HomeController extends Controller
{
    public function mostrarHome()
    {
        return view('home');
    }
}
