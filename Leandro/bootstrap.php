<?php

require_once __DIR__.'/vendor/autoload.php';

    //Aqui a gente recupera o que o usuário digitou e qual método HTTP ele utilizou

    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['PATH_INFO'];

    //Instanciar classe Router
    $router = new \Aluno\Leandro\Router($method, $path);

    //Adicionar as rotas válidas abaixo

    $router->get('/ola-mundo', function(){
        return "Olá mundo!";
    });

    $router->get('/exemplo', 'Aluno\Leandro\Controller\ExercicioController::exibir');

    $router->post('/exemplo-resultado', 'Aluno\Leandro\Controller\ExercicioController::exibirResultado');

    $router->get('/cliente/novo', 'Aluno\Leandro\Controller\ClientesController::abrirFormularioInserir');

    $router->post('/cliente/inserir', 'Aluno\Leandro\Controller\ClientesController::inserirCliente');

    $router->get('/cliente', 'Aluno\Leandro\Controller\ClientesController::abrirListaClientes');

    $router->get('/cliente/alterar/{id}', 'Aluno\Leandro\Controller\ClientesController::abrirFormularioAlterar');

    $router->post('/cliente/editar/{id}', 'Aluno\Leandro\Controller\ClientesController::editarCliente');

    $router->get('/cliente/excluir/{id}', 'Aluno\Leandro\Controller\ClientesController::excluirCliente');

    $router->get('/produto/novo', 'Aluno\Leandro\Controller\ProdutosController::abrirFormularioInserir');

    $router->post('/produto/inserir', 'Aluno\Leandro\Controller\ProdutosController::inserirProduto');
    
    $router->get('/produto', 'Aluno\Leandro\Controller\ProdutosController::abrirListaProdutos');

    $router->get('/produto/alterar/{id}', 'Aluno\Leandro\Controller\ProdutosController::abrirFormularioAlterar');

    $router->post('/produto/editar/{id}', 'Aluno\Leandro\Controller\ProdutosController::editarProduto');

    $router->get('/produto/excluir/{id}', 'Aluno\Leandro\Controller\ProdutosController::excluirProduto');



    //Adicionar as rotas válidas acima

    $result = $router->handler();

    if (!$result){
        http_response_code(404);
        echo "Página não encontrada";
        die();
    }

    echo $result($router->getParams());