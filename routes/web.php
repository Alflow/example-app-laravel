<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {
    Route::get('/cursos', 'index');
    Route::get('/cursos/create', 'create');
    // Si metemos más parámetros {especializacion?} con ? será un parámetro opciona
    Route::get('/cursos/{curso}', 'show');
});


// forma de enrutar en versiones anteriores
// Route::get('/cursos', 'CursoController@index');

