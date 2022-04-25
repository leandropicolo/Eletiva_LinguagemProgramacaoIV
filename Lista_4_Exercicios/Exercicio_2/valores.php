<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Valores - Validação Cheques - Exercicio 2</title>
  </head>
  <body class="container">
    <h1>Valores - Validação Cheques - Exercicio 2</h1>

    <?php 
        $quantidade = $_POST['quantidade'];
        $total = $_POST['total'];
    ?>
        <div class="row">
          <form action="calculos.php" method="POST">
          <?php
            session_start();
            $_SESSION['quantidade'] = $quantidade;
            $_SESSION['total'] = $total;
            if ($quantidade > 0){
              for($i=1; $i<=$quantidade; $i++){
            ?>
              <div class="col">
                <label for="cheque<?= $i ?>" class="label-control">
                  Informe o valor do <?= $i ?>º cheque:
                </label>
              <input type="text" name="cheque<?= $i ?>" id="cheque<?= $i ?>" class="form-control"/>
              </div>
            
            </div>
          
          <?php
            }

          ?>
          <div class="row">
            <div class="col"> 
              <button type="submit" class="btn btn-primary mt-2">
                Validar
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