<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 5 - Refeito</title>
  </head>
  <body class="container">
    <h1>Exercicio 5 - Refeito</h1>
    <form method="post" action="resultado" class="container"> 
        <div class="row">     
            <div class="col-6">
                <label for="valor1" class="label-control">Nota do aluno 1:</label>
                <input type="text" name="valor1" id="valor1" class="form-control"/>
            </div>
            <div class="col-6">
                <label for="valor2" class="label-control">Nota do aluno 2:</label>
                <input type="text" name="valor2" id="valor2" class="form-control"/>
            </div>
        </div>
        <div class="row">     
            <div class="col-6">
                <label for="valor3" class="label-control">Nota do aluno 3:</label>
                <input type="text" name="valor3" id="valor3" class="form-control"/>
            </div>
            <div class="col-6">
                <label for="valor4" class="label-control">Nota do aluno 4:</label>
                <input type="text" name="valor4" id="valor4" class="form-control"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-danger">Calcular média</button>
            </div>
        </div>

    </form>

    <?php
        if (isset($resultado))
            echo "$resultado";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>