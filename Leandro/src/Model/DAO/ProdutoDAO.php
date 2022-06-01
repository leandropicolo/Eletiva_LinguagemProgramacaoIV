<?php

namespace Aluno\Leandro\Model\DAO;

use Aluno\Leandro\Model\Entity\Produto;

class ProdutoDAO{
    public function inserir(Produto $c){
        try{
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $c->getNome());
            $p->bindValue(":descricao", $c->getDescricao());
            $p->bindValue(":valor", $c->getValor());
        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produto $c){
        try{
            $sql = "UPDATE `produtos` SET `nome`= :nome,`descricao`= :descricao,`valor`=:valor WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $c->getNome());
            $p->bindValue(":descricao", $c->getDescricao());
            $p->bindValue(":valor", $c->getValor());
            $p->bindValue(":id", $c->getId());
        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produtos` WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produtos";
            return Conexao::conectar()->query($sql);
        } catch(\Exception $e){
            return false;
        }

    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM produtos WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return false;
        }

    }
}