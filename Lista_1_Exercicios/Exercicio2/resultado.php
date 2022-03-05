<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Arquivo de Resultado</title>
  </head>
  <body class="container mt-5">
    <h1>Resultado</h1>

    <?php
        $valor1 =$_POST['valor1']; //valor1 é o name do item no arquivo index
        $valor2 =$_POST['valor2'];
        if ($valor1 >= 0 && $valor2 >= 0){
            echo "O valor a pagar deve ser de :".doubleval($valor1 * $valor2);
            echo "<br/>";
        }
        else{
            echo "Inconsistencia nos valores";
        }
        
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>