<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resposta Exercício 5</title>
  </head>
  <body class="container">
    <h1>Resposta Exercicio 5</h1>

    <?php

        for ($i=1; $i<=10; $i++){
            $vetor[$i]= $_POST["valor$i"];
        }

        echo "Crescente";
        echo "<br>";
        $auxiliar = 0;
        for ($i=1; $i<=10; $i++){
            for ($j=$i; $j<=10; $j++){
                if ($vetor[$i] > $vetor[$j]){
                    $auxiliar = $vetor[$i];
                    $vetor[$i] = $vetor[$j];
                    $vetor[$j] = $auxiliar;
                }
            }
        }

        foreach ($vetor as $chave => $valor){
            echo "A posição $chave tem valor $valor.";
            echo "<br>";
        }
             
        echo "<br>";
        echo "Decrescente";
        echo "<br>";
        $auxiliar = 0;
        for ($i=1; $i<=10; $i++){
            for ($j=$i; $j<=10; $j++){
                if ($vetor[$i] < $vetor[$j]){
                    $auxiliar = $vetor[$i];
                    $vetor[$i] = $vetor[$j];
                    $vetor[$j] = $auxiliar;
                }
            }
        }

        foreach ($vetor as $chave => $valor){
            echo "A posição $chave tem valor $valor.";
            echo "<br>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>