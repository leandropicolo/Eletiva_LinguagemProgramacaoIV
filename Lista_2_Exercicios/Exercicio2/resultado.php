<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resposta Exercício 2</title>
  </head>
  <body class="container">
    <h1>Resposta Exercicio 2</h1>

    <?php
      $valorproc = $_POST["valorproc"];
      for ($i=1; $i<=20; $i++){
        $vetor[$i] = $_POST["valor$i"];
      }

      $qtde = 0;
      foreach ($vetor as $chave => $valor){
        if ($valor<1 || $valor>10){
          echo "Existem valores inválidos nos dados";
          break;
        }
        else ($valor == $valorproc){
          $qtde = $qtde + 1;
          echo "Posição do valor procurado: $chave";
          echo "<br>";
        }        
      }
      echo "O valor $valorproc está em $qtde posições.";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>