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
        if ($valor1_double > 10){
            $resultado = "maior que 10.";
        }
        else if($valor1_double < 10){
            $resultado = "menor que 10.";
        }
        else{
            $resultado = "igual a 10.";
        }
        require_once("../src/View/exemplo.php");
    }
}