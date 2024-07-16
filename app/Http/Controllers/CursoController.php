<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // punto de llegada
    public function index()
    {
        return "Bienvenido a la sección de cursos";
    }

    // convención de punto de entrada para crear
    public function create()
    {
    }

    // convención de muestra de vista
    public function show($curso)
    {
        return ("Bienvenido al curso" . $curso);
    }
}
