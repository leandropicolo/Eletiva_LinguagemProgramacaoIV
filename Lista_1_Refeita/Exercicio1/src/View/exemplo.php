<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 1 - Refeito</title>
  </head>
  <body class="container">
    <h1>Exercicio 1 - Refeito</h1>
    <form method="post" action="/exemplo-resultado"> 
        <div class="row">     
            <div class="col">
                <label for="valor1" class="label-control">Informe o valor pago:</label>
                <input type="number" name="valor1" id="valor1" class="form-control"/>
            </div>
            <div class="col">
                <label for="valor2" class="label-control">Informe o valor do produto:</label>
                <input type="number" name="valor2" id="valor2" class="form-control"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-danger">Calcular Troco</button>
            </div>
        </div>

    </form>

    <?php
        if (isset($resultado))
            echo "O resultado é $resultado";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>