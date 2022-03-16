<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resposta Exercício 1</title>
  </head>
  <body class="container">
    <h1>Resposta Exercicio 1</h1>

    <?php

      for ($i=1; $i<=10; $i++){
        $vetor[$i]= $_POST["valor$i"];
      }

      $posicao = 0;
      $maior = 0;
      // var_dump($vetor);
      foreach ($vetor as $chave => $valor){
        echo "Posição do vetor: $chave e seu valor é $valor";
        echo "<br>";
        if ($valor > $maior){
          $maior = $valor;
          $posicao = $chave;
        }
      }
      echo "<br>";
      echo "O maior valor é $maior e está na posição $posicao ."


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>