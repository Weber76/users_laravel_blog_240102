<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return response('Esta es nuestra Home', 200)
            ->header('Content-Type', 'text/plain')
            ->header('Mi-Header-Personalizado', 'Mi Valor Personalizado')
            ->cookie('hola-cookies', 'mi-valor-encriptado', 60);
    }
    public function bienvenido($blogger = "Blogger")
    {
        return "Bienvenido " . $blogger;
    }
}
