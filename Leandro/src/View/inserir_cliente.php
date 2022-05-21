<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inserir Cliente</title>
  </head>
  <body>
    <h1>Inserir Cliente</h1>

    <form action="/cliente/inserir" method="post">
        <div class="row">
            <div class="col-5">
                <label for="nome" class="label-control" name="nome" id="nome">Informe o Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome"/>
            </div>
            <div class="col-5">
                <label for="email" class="label-control" name="email" id="email">Informe o E-mail:</label>
                <input type="text" class="form-control" name="email" id="email"/>
            </div>
            <div class="col-2">
                <label for="idade" class="label-control" name="idade" id="idade">Informe o Idade:</label>
                <input type="text" class="form-control" name="idade" id="idade"/>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5">
                <button type="submit" class="btn btn-primary">
                    Enviar
                </button>
            </div>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>