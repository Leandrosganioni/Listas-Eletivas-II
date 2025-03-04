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

    #exercicio 3
    public function abreProduto(){
        return view("lista2.ex3");
    }

    public function produto(Request $request){
        $valor = intval($request->input("valor"));

        #logica

        return view("lista2.ex3", compact("valorNovo"));
    }

    #exercicio 4
    public function abrePrimos(){
        return view("lista2.ex4");
    }

    public function primos(Request $request){
        $numero = intval($request->input("numero"));

        #logica

        return view("lista2.ex4", compact("numerosPrimos"));
    }

    #exercicio 5
    public function abreMeses(){
        return view("lista2.ex5");
    }

    public function meses(Request $request){
        $mes = intval($request->input("mes"));

        #logica

        return view("lista2.ex5", compact("nomeMes"));
    }

    #exercicio 6
    public function abreNumeros(){
        return view("lista2.ex6");
    }

    public function numeros(Request $request){
        $numero = intval($request->input("numero"));

        #logica

        return view("lista2.ex6", compact("contagem"));
    }

    #exercicio 7
    public function abreSomatorio(){
        return view("lista2.ex7");
    }

    public function somatorio(Request $request){
        $numero = intval($request->input("numero"));

        #logica

        return view("lista2.ex7", compact("somatorio"));
    }

    #exercicio 8
    public function abreRegressiva(){
        return view("lista2.ex8");
    }

    public function regressiva(Request $request){
        $numero = intval($request->input("numero"));

        #logica

        return view("lista2.ex8", compact("regressiva"));
    }

    #exercicio 9
    public function abreFatorial(){
        return view("lista2.ex9");
    }

    public function fatorial(Request $request){
        $numero = intval($request->input("numero"));

        #logica

        return view("lista2.ex9", compact("fatorial"));
    }

    #exercicio 10
    public function abreTabuada(){
        return view("lista2.ex10");
    }

    public function tabuada(Request $request){
        $numero = intval($request->input("numero"));

        #logica

        return view("lista2.ex10", compact("tabuada"));
    }
    
    





}
