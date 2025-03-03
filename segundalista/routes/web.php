<?php

use App\Http\Controllers\ExerciciosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/formulario", [ExerciciosController::class, 'abrirFormulario']);

Route::post("/formulario_resposta", [ExerciciosController::class, "calcularFormulario"]);
