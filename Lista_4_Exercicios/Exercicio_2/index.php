<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Validação Lote de Cheques - Exercicio 2</title>
  </head>
  <body class="container">
    <h1>Validação Lote de Cheques - Exercicio 2</h1>

    <div class="row">
        <div class="col">            
            <form action="valores.php" method="POST">
                    <div class="col">
                        <label for="total" classe="label-control">
                            Digite o valor total dos cheques:
                        </label>
                        <input type="text" name="total" id="total" class="form-control">
                    </div>
                    <div class="col">
                        <label for="quantidade" classe="label-control">
                            Digite a quantidade de cheques:
                        </label>
                        <input type="text" name="quantidade" id="quantidade" class="form-control">    
                    </div>
                </div>
              </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Digitar cheques</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>