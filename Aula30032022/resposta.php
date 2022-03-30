<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistema em PHP</title>
  </head>
  <body class="container">
    <h1>Sistema em PHP</h1>
    
    <?php 
        if ($_POST){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            /*setcookie("usuario", $email, time() + (86400 * 1), "/"); //qdo utiliza a barra, o cookie pode ser acessado de qualquer local da pagina
            echo "Seja bem vindo ".$_COOKIE['usuario'];*/

            session_start();
            if (($email == "v@v.com") && ($senha == "123")){
                $_SESSION['usuario'] = $email;
                $_SESSION['acesso'] = true;
                echo "Bem vindo usuário ".$_SESSION['usuario'];
                echo '<a href="sair.php">Sair</a>';
            }else{
                header('Location: index.php');
                exit;
            }
        }else{
            session_start();
            if ($_SESSION['acesso'] == true){
                echo "Seja bem vindo usuário".$_SESSION['usuario'];
            }else{
                header('Location: index.php');
                exit;
            }
        }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>