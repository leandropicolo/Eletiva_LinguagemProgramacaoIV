<?php

namespace Aluno\Leandro\Controller;

class ExercicioController
{
    public static function exibir(){
        require_once("../src/View/exemplo.php");
    }

    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
        $valor1_double = doubleval($valor1);
        if ($valor1_double > 0){
            $resultado = "O valor " . $valor1 . " é maior que zero";
        }
        else if ($valor1_double < 0){
            $resultado = "O valor " . $valor1 . " é menor que zero";
        } 
        else {
            $resultado = "O valor " . $valor1 . " é igual a zero";
        }
        require_once("../src/View/exemplo.php");
    }
}