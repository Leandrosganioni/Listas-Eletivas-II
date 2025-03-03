<?php

use App\Http\Controllers\ExerciciosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/formulario", [ExerciciosController::class, 'abrirFormulario']);

Route::post("/formulario_resposta", [ExerciciosController::class, "calcularFormulario"]);


#exercicio1
Route::get("/ex1", [ExerciciosController::class, 'abrirCalcularSoma']);
Route::post("/ex1_resposta", [ExerciciosController::class, "calcularSoma"]);

#exercicio2
Route::get("/ex2", [ExerciciosController::class, 'abrirValores']);
Route::post("/ex2_resposta", [ExerciciosController::class, "Valores"]);

