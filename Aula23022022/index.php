<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Server: server project para iniciar o projeto!--> 
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>
        Olá! Hoje é dia
        <?php 
            //comentário php
            #comentario php
            /* mais de uma linha php
            */
            echo "<p>".date('d/m/Y')."</p>"; //menor custo computacional
            //print("Oi"); //maior custo computacional
            $umaVariavel = 20;
            $umaVariavel = "Vanessa";
            echo "Meu nome é $umaVariavel"; //se usar aspas duplas, será exibido o conteudo da variável; aspas simples, exibido como texto
            $total = 30 * 10 / 2 - 4+ 1;
            $total++;
            $total--;
            --$total; //a diferença entre decrementar/incrementar antes e depois é no processamento (primeiro incrementa/decrementa, depois processa)
        ?>  
    </h1> <!--Y maiusculo para exibir o ano com 4 dígitos !-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  </body>
</html>