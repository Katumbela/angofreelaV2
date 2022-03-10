<?php
include('header.php');
?>

<?php

$interesse = $_GET['area'];
$emai =$_GET['email'];
$nome = $_GET['nome'];


$inserir = "INSERT INTO cadastro (interesses) VALUE ('$interesse') where email='$emai'";
$feito = $conexao -> query($inserir);
   
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrado com Sucesso - AngoFreela </title>
    <script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light"> 
        <div class="container"> 
            <a class="navbar-brand"­ href="#"> 
                <img src="img/logo01.png" alt="" width="30" height="30"> 
            </a>  <?=$nome?>
        </div>
    </nav>
<br>
<center>
  <img src="img/ok.jpg" width="55px" height="55px" alt="">
  <br>
  <h2>Sua conta foi criada com sucesso <?=$nome?> ?</h2>
  <p><a href="auth.php?email=<?=$emai?>">Clique aqui</a> para ir à pagina inicial</p>
</center></body>
</html>