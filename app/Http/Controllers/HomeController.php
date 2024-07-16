<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // usamos invoke cuando solo va a administrar UNA RUTA
    public function __invoke(){
        return "Bienvenido a la página de inicio";
    }
}
