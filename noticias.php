<?php
include('conexao.php');
if(isset($_GET['id_noticia'])){
  $id_noticia = $_GET['id_noticia'];
  $sql1 = 'SELECT * FROM noticia WHERE id_noticia = '.$id_noticia;
}else{
  session_start();
  header("Location: ./index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Cache-Control" content="no-store" /> <!--  REMOVER -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--- Boostrap --->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
  <!--- FIM Boostrap --->
  <!--- Font Awesome (Icones) --->
  <script src="https://kit.fontawesome.com/68670ab6e8.js" crossorigin="anonymous"></script>
  <!--- Fonte POPPINS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!--- Logo na Barra -->
  <link rel="shortcut icon" type="imagex/png" href="logo16.png">


	<title>Notícias - SISPUMI</title>

  <style type="text/css">
    body{
      font-family: poppins;
    }
  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="./img/logo.png" alt="..." height="46">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php" style="font-size: 25px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicos.html" style="font-size: 25px;">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.html" style="font-size: 25px;">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Fim da navbar -->
<br>

<?php

  $executa = $con->query($sql1);
 
  if($executa -> fetch_array() == ""){ 
    //caso nao tenha nenhum acho impossivel
    echo 'erro';
  }else{
    // caso tenha grupos para listar
    $executa = $con->query($sql1);
    while($noticia = $executa -> fetch_array()){//Loop vai selecionar 1
      $titulo = $noticia['titulo_noticia'];
      $texto = $noticia['texto_noticia'];
      $imagem = $noticia['imagem_noticia'];
    }
  }

?>

<div class="row container-fluid">
  <div class="col-sm-2"></div>

  <div class="col-sm-8">
    <br>
    <h1 style="font-size: 70px; color: #760E9A;"><strong><?php echo $titulo; ?></strong></h1>
    <hr>
    <h5>Por: IMPROVED inc.</h5>
    <br>
 	  <img src="<?php echo $imagem; ?>" class="rounded" alt="..." style="max-width: 100%;">
  <br><br>
  <h6>Descrição sobre foto | Postado 14 de Abril, às 00:00</h6>
  <hr>
  <br>
  <h5>    <p><?php echo $texto; ?></p></h5>
    <br>
    <hr>
  </div>
  <div class="col-sm-2"></div>
</div>

<!-- RODAPÉ -->
<footer class="text-center text-white bg-dark">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h4 class="font-weight-bold">
              <a href="index.php" class="text-white"><strong>Home</strong></a>
            </h4>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h4 class="font-weight-bold">
              <a href="servicos.html" class="text-white"><strong>Serviços</strong></a>
            </h4>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h4 class="font-weight-bold">
              <a href="contato.html" class="text-white"><strong>Contato</strong></a>
            </h4>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h4 class="font-weight-bold">
              <a href="login.html" class="text-white"><strong>Painel Administrativo</strong></a>
            </h4>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-4" />

      <!-- Section: Text -->
      
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8 text-white">
            <img src="./img/logo1.png" alt="..." height="150">
            <p>
               Unindo Trabalhadores e Fortalecendo os seus Direitos!
            </p>
          </div>
        </div>
      
      <!-- Section: Text -->

    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3 text-white-50"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      Copyright © 2024 | Improved. Todos os direitos reservados
    </div>
    <!-- Copyright -->
  </footer>
</body>
</html>