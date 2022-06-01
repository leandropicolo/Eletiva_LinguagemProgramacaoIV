<?php

namespace Aluno\Leandro\Controller;

use Aluno\Leandro\Model\DAO\ProdutoDAO;
use Aluno\Leandro\Model\Entity\Produto;

class ProdutosController{

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ProdutoDAO();
        $resultado = $dao->consultarPorId($params['1']);
        require_once "../src/View/alterar_produto.php";
    }

    public static function abrirListaProdutos(){
        $dao = new ProdutoDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_produto.php";
    }

    public static function inserirProduto(){
        $produto = new Produto();
        $produto->setDescricao($_POST['descricao']);
        $produto->setValor($_POST['valor']);
        $produto->setNome($_POST['nome']);
        $dao = new ProdutoDAO();
        if ($dao->inserir($produto)){
            $resposta = true;            
        }else{
            $resposta = false;
        }
        ProdutosController::abrirListaProdutos();
    }

    public static function editarProdutos($params){
        $produto = new Produto();
        $produto->setDescricao($_POST['descricao']);
        $produto->setValor($_POST['valor']);
        $produto->setNome($_POST['nome']);
        $produto->setId($params[1]);
        $dao = new ProdutoDAO();
        if ($dao->alterar($produto)){
            $resposta = true;            
        }else{
            $resposta = false;
        }
        ProdutosController::abrirListaProdutos();
    }

    public static function excluirProduto($params){        
        $dao = new ProdutoDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;            
        }else{
            $resposta = false;
        }
        ProdutosController::abrirListaProdutos();
    }

}