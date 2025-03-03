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

    #exercicio 2
    public function abrirValores(){
        return view("lista2.ex2");
    }

    public function Valores(Request $request){
        $A = intval($request->input("A"));
        $B = intval($request->input("B"));
    
        if ($A == $B) {
            $mensagem = "Números iguais: $A";
        } else {
            $argh = array($A, $B);
            asort($argh);
            $mensagem = "Valores em ordem crescente: " . implode(", ", $argh);
        }
    
        return view("lista2.ex2", compact("mensagem"));
    } 
}
