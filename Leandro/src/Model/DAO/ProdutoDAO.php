<?php

namespace Aluno\Leandro\Model\DAO;

use Aluno\Leandro\Model\Entity\Produto;

class ProdutoDAO{
    public function inserir(Produto $c){
        try{
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";

        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produto $c){
        try{
            $sql = "UPDATE `produtos` SET `nome`= :nome,`descricao`= :descricao,`valor`=:valor WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produtos` WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produtos";

        } catch(\Exception $e){
            return false;
        }

    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM produtos WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }

    }
}