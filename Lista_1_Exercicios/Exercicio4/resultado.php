<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resultado</title>
  </head>
  <body>
    <h1>Avaliação</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
        $valor1 = $_POST['valor1'];
        $valor1_double = doubleval($valor1);
        if ($valor1_double > 0){
            echo "O valor " . $valor1 . " é maior que zero";
        }
        else if ($valor1_double < 0){
            echo "O valor " . $valor1 . " é menor que zero";
        } 
        else {
            echo "O valor " . $valor1 . " é igual a zero";
        }
    ?>
   
  </body>
</html>