<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Digitar voltas - Exercicio 1 - Corrida</title>
  </head>
  <body>
    <h1>Digitar voltas - Exercicio 1 - Corrida</h1>

    <?php 
        $voltas = $_POST['voltas'];
    ?>
        <div class="row">
          <form action="calculos.php" method="POST">
          <?php
            session_start();
            $_SESSION['voltas'] = $voltas;
            if ($voltas > 0){
              for($i=1; $i<=$voltas; $i++){
            ?>
              <div class="col">
                <label for="voltas<?= $i ?>" class="label-control">
                  Informe a <?= $i ?>ª volta:
                </label>
              <input type="text" name="voltas<?= $i ?>" id="voltas<?= $i ?>" class="form-control"/>
              </div>
            
            </div>
          
          <?php
            }

          ?>
          <div class="row">
            <div class="col"> 
              <button type="submit" class="btn btn-primary mt-2">
                Calcular
              </button>
            </div>
          </div>
          </form>
          <?php
          } else {
            header('Location: index.php');
            exit;
          }

          ?>
          

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>