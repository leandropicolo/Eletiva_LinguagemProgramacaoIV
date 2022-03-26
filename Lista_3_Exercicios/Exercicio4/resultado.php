<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resposta - Exercicio 4</title>
  </head>
  <body class="container">
    <h1>Resposta - Exercicio 4</h1>

    <?php
        
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $numero4 = $_POST['numero4'];
        $numero5 = $_POST['numero5'];

        function somaDivisores($valor){
            $soma = 0;
            for ($i = 1; $i <= $valor; $i++){
              if ($valor % $i == 0 && $valor != $i){
                 $soma = $soma + $i;
              }
            }
            echo "O resultado da soma dos divisores de $valor é ".$soma;
            echo "<br>";
        }

        if ($numero1 <= 0 || $numero2 <= 0 || $numero3 <= 0 || $numero4 <= 0 || $numero5 <= 0 ){
          echo "Um dos números informados é menor ou igual a zero. Reinicie o programa!!!";
        }
        else{
          somaDivisores($numero1);
          somaDivisores($numero2);
          somaDivisores($numero3);
          somaDivisores($numero4);
          somaDivisores($numero5);
        }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>