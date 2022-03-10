<?php
include('header.php');
?>

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

$inserir = "INSERT INTO cadastro (nome , email) VALUE ('$nome' , '$email' )";
$feito = $conexao -> query($inserir);
   
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro - AngoFreela </title>
    <script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
<br>
<center>
  <img src="img/logo01.png" width="55px" height="55px" alt="">
  <br>
  <h2>Que tipo de freelancer procura <?=$nome?> ?</h2>
</center>
<form action="done.php" method="get">
      <div class="container">
        <div class="mb-3 ">
          <br>
         <input type="hidden" value="<?=$email?>" name="email">
         <input type="hidden" value="<?=$nome?>" name="nome">
          <br>
         <select class="form" name="area" id="area">
           <option value=":">Selecione sua categoria</option>
           <option value="Web-Dev">Web-Dev</option>
           <option value="Fotógrafo">Fotógrafo</option>
           <option value="Desginer">Designer</option>
           <option value="Contabilista">Contabilista</option>
           <option value="Android-Dev">Android-Dev</option>
           <option value="Tradutor">Tradutor</option>
           <option value="Marketing">Marketing Digital</option>
           <option value="Criador de conteudo digital">Redator</option>
           <option value="Matemático">Matemático</option>
           <option value="Fisíco">Fisíco</option>
           <option value="">Adicionar depois</option>
         </select>
         <br><br>
        <button type="submit" class="btn btn-primary">Continuar</button>
      </div><br><br>
    </form>
    <p class="desc">Quer se cadastrar como freelancer? <a href="cadastro_freelancer.html">Clique aqui</a>!</p>
</body>
</html>