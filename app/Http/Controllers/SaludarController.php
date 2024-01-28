<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class SaludarController extends Controller
{
    public function decirHola($persona = "humano")
    {
        return "hola "
            . $persona
            . "<br><a href='"
            . route('decir.bienvenido', ["blogger" => $persona])
            . "'>Decir Bienvenido</a>";
    }

    public function holaMundo()
    {
        return "¡Hola mundo!";
    }
    public function holaJson()
    {
        return [1, 2, 3];
    }
}
