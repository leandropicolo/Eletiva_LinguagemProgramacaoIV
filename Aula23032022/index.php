<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Funções</title>
  </head>
  <body class="container">
    <h1>Funções</h1>
	
	<?= date("y/m/Y")?>
	
	<br/>
	
	<?= date("h:i") ?>

  <br/>

  <?php
    function formatarNumero($numero){
      echo "R$".(number_format($numero, 2, ',', '.'));
    }

    function retornarNumero($numero){
      return "R$".(number_format($numero, 2, ',', '.'));
    }

    formatarNumero(10004.789);
    echo "<br/>";
    echo retornarNumero(897.111);
    $numero = retornarNumero(150.669);
    echo "<br/>";
    echo $numero;

  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>