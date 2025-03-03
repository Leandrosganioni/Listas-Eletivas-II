<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExerciciosController extends Controller{

    #exercicio_exemplo
    public function abrirFormulario(){
        return view('formulario');

    }

    public function calcularFormulario(Request $request){
        $valor1 = intval($request->input("valor1"));
        $valor2 = intval($request->input("valor2"));
        $soma = $valor1 + $valor2;
        return view("formulario", compact("soma"));
    }

    #exercicio 1
    public function abrirCalcularSoma(){
        return view("lista2.ex1");
    }
    public function calcularSoma(Request $request) {
        $valor1 = intval($request->input("valor1"));
        $valor2 = intval($request->input("valor2"));
        if ($valor1 == $valor2) {
            $resultado = ($valor1 + $valor2) * 3;
        } else {
            $resultado = $valor1 + $valor2;
        }
        return view("lista2.ex1", compact("resultado"));
    }

    #exercicio
}
