<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 2</title>
  </head>
  <body class="container mt-5">
    <h1>Exercicio 2</h1>
    <h2>Insira valores entre 1 e 20</h2>
    <form action="resultado.php" method="post">
      <div class="row">
        <?php
          for($i=1; $i<=10; $i++){
        ?>
          <div class="col">
            <label for="valor<?= $i ?>" class="label-control">
              Informe o valor <?= $i ?>
            </label>
            <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" class="form-control"/>
          </div>
        <?php
          }
        ?>
      </div>
      <div class="row">
        <?php
          for($i=11; $i<=20; $i++){
        ?>
          <div class="col">
            <label for="valor<?= $i ?>" class="label-control">
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
          <label for="valorproc" class="label-control">
            Informe o valor procurado:
          </label>
          <div class="col-1">
            <input type="number" name="valorproc" id="valorproc" class="form-control"/>
          </div>
          <button class="btn btn-primary mt-2">
            Procurar
          </button>            
        </div>
      </div>
    </form>

   
  </body>
</html>