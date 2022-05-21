<?php

namespace Aluno\Leandro\Model\DAO;

class Conexao{

    public static function conectar(){
        return new PDO("mysql:host=localhost; dbname=projeto.php","root","");
    }

}