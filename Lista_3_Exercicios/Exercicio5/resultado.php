<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resposta - Exercicio 5</title>
  </head>
  <body class="container">
    <h1>Resposta - Exercicio 5</h1>

    <?php
        function calcularIMC($altura, $peso){
            $imc = $peso / ($altura * $altura);
            echo "O IMC desta pessoa é ".$imc;
            echo "<br>";
            if ($imc <= 18.5){
                echo "Abaixo do peso";
                echo "<br>";
            }
            elseif ($imc > 18.5 && $imc <= 24.9) {
                echo "Peso ideal (parabéns)";
                echo "<br>";
            }
            elseif ($imc > 25 && $imc <= 29.9) {
                echo "Levemente acima do peso";
                echo "<br>";
            }
            elseif ($imc > 30 && $imc <= 34.9) {
                echo "Obesidade grau I";
                echo "<br>";
            }
            elseif ($imc > 35 && $imc <= 39.9) {
                echo "Obesidade grau II (severa)";
                echo "<br>";
            }
            else {
                echo "Obesidade grau III (mórbida)";
                echo "<br>";
            }
        }

        $alturaInformada = $_POST['altura'];
        $pesoInformado = $_POST['peso'];

        calcularIMC($alturaInformada, $pesoInformado);

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>