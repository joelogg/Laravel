<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidoController extends Controller
{
    public function index($name, $nickname=null)
    {
        if($nickname)
        {
            return "Bienvenido {$name}, tu apodo es {$nickname}";
        }
        else
        {
            return "Bienvenido {$name}";
        }
    }
}
