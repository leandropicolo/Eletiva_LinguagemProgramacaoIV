<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 3</title>
  </head>
  <body class="container mt-5">
    <h1>Substituir repetidos por hífen - Mapa Ordenado</h1>
    <form action="resultado.php" method="post">
      <div class="row">
        <?php
          for($i=1; $i<=10; $i++){
        ?>
          <div class="col">
            <label for="valor<?= $i ?>" class="label-control">
              <?php echo $i ?>
              Informe o valor <?= $i ?>
            </label>
            <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" class="form-control"/>
          </div>
        <?php
          }
        ?>
      </div>
      <div class="row">
        <div class="col"> 
          <button class="btn btn-primary mt-2">
            Enviar
          </button>
        </div>
      </div>
    </form>
  </body>
</html>