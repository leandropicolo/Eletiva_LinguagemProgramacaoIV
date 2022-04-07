<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dados da Corrida - Exercicio 1</title>
  </head>
  <body class="container">
    <h1>Dados da Corrida - Exercicio 1</h1>

    <div class="row">
        <div class="col">
            <div class="modal mt-5" tabindex="-1" style="display: block">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-body">
                        <form action="voltas.php" method="POST">
                                <div class="col">
                                    <label for="voltas" classe="label-control">
                                        Digite a quantidade de voltas:
                                    </label>
                                    <input type="text" name="voltas" id="voltas" class="form-control">
                                </div>
                            </div>
                          </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Digitar tempos</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>