<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resposta - Exercicio 3</title>
  </head>
  <body class="container">
    <h1>Resposta - Exercicio 3</h1>

    <?php
        function compararNumero($num1, $num2){
            if ($num1 > $num2){
              return $num2;
            }
            else if ($num1 < $num2){
              return $num1;
            }
            else{
              return "nenhum, os números são iguais";
            }
        }

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];

        echo "O menor número é: ".compararNumero($num1, $num2);
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>