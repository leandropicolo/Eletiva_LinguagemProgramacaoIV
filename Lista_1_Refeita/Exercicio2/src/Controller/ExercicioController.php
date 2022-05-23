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
        if ($valor1 >= 0 && $valor2 >= 0){
            echo "O valor a pagar deve ser de :".doubleval($valor1 * $valor2);
            echo "<br/>";
        }
        else{
            echo "Inconsistencia nos valores";
        }
        require_once("../src/View/exemplo.php");
    }
}