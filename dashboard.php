<?php
session_start();
include('header.php');
?>

<?php


$email = $_SESSION['email'];

 $emai = $email;

$inserir = "SELECT * FROM cadastro WHERE email='$emai'";
$feito = $conexao -> query($inserir);
   $dados= mysqli_fetch_array($feito);
   $id = $dados['id'];
   $usuario = $dados['nome'];
   $usuario_email = $dados['email'];
   $hab= $dados['habilidades'];
$_SESSION['usuario']=$dados['nome'];
$_SESSION['id']=$id;
$_SESSION['email']=$dados['email'];
$_SESSION['hab']= $hab;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrado com Sucesso - AngoFreela </title>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light"> 
        <div class="container"> 
            <a class="navbar-brand" href="perfilfreela.php"> 
                <img src="img/logo01.png" alt="" width="30" height="30"> 
            </a> <a class="user" href="perfilfreela.php"><?=$usuario?></a>
        </div>
    </nav>
<center>
    <div >
<div class="row">
<div class="col-md-4 col-sm-6 col-lg-3 text-center">
    <fieldset class="formulario">
        <br><br>
<form action="post.php" method="post">
    <textarea name="post" id="exampleInputEmail" cols="25" rows="1" class="pub" placeholder="Precisa de algo?"></textarea>
          
                 <button type="submit" class="post">Postar</button> 
<br><br>
                </form>
                <hr>
                <h4>Trabalhos Disponíveis <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi-baixo bi-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
</svg></h4>
                <hr>

                <!--colocar aqui as postagens dos empregadores e linkado-->
                
<div class="col-lg-12 card1 col-sm-12 col-xm-4 col-md-12">
    <div class="card ">
        <div class="card-image">
            <br>
            <img src="img/logo01.png" height="50px" width="50px" alt="">
        <div class="card-title">
            <h3>Arnaldo Kissama</h3>
            <div class="card-body">
                <p>Preciso de alguém que me crie um logotipo e um de Marketing digital, algue?</p>
                </div>
                <button class="btn btn-outline-success">Negociar</button>
            </div>
        </div>
    </div>
</div>
<br><br>

</fieldset>
</div>

    <br>
<br>
<div class="col-md-8 col-sm-6 col-lg-8"> 
    <hr>
    <h2>Freelancers</h2>   
    
    <div class="row container">
        

<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                <button class="btn btn-outline-primary">Contactar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-lg-3">
    <div class="card">
        <div class="card-image">
            <br>
            <img src="img/eu1.jpg" class="imagem2" height="70px" width="70px" alt="">
        <div class="card-title">
            <h3>João Afonso Katumbela</h3>
            <div class="card-body">
                <p>Programador Web</p>
                </div>
            </div>
        </div>
    </div>
</div>



    </div>


</div>

</div>


</div>

</center>

</body>
</html>