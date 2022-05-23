<?php

namespace Aluno\Leandro\Controller;

class ExercicioController
{
    public static function exibir(){
        require_once("../src/View/exemplo.php");
    }

    public static function exibirResultado(){
        $valor1 =$_POST['valor1']; //valor1 é o name do item no arquivo index
        $valor2 =$_POST['valor2'];
        $valor3 =$_POST['valor3'];
        $valor4 =$_POST['valor4'];
        $media = (doubleval($valor1) + doubleval($valor2) + doubleval($valor3) + doubleval($valor4))/4;
        if ($valor1 >= 0 && $valor2 >= 0 && $valor3 >= 0 && $valor4 >= 0){
           $resultado = "A média é " . $media . ".";
        }
        else{
            $resultado = "Um dos valores é inválido. Reinicie o cálculo.";
        }
        require_once("../src/View/exemplo.php");
    }
}