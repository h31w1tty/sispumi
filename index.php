<?php
  include('conexao.php');
  $sql1 = 'SELECT * FROM carrossel WHERE status_carrossel = 1 ORDER BY id_carrossel DESC LIMIT 3'; //listar carrosseis ativos
  $sql2 = 'SELECT * FROM noticia WHERE status_noticia = 1 ORDER BY id_noticia DESC LIMIT 3'; //listar ultimas 3 noticias ativas
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
  <meta http-equiv="Cache-Control" content="no-store" /> <!--  REMOVER -->
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
  <link rel="shortcut icon" type="imagex/png" href="./img/logo16.png">


	<title>SISPUMI</title>

  <style type="text/css">
    body{
      font-family: poppins;
    }
    a{
      text-decoration: none;
      color: white;
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
          <a class="nav-link active" aria-current="page" href="index.php" style="font-size: 25px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicos.php" style="font-size: 25px;">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php" style="font-size: 25px;">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Fim da navbar -->

<!-- ↓ Carrossel ↓ -->
<div id="carouselExampleCaptions" class="carousel slide container-fluid" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <?php
      $executa = $con->query($sql1);
      if($executa -> fetch_array() == ""){ //Se NAO tiver noticias para listar
        echo 
          '<div class="carousel-item active">
            <img src="./img/jornal.jpg" class="d-block w-100" alt="..." style="max-height: 650px;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Aguardando Atualizações</h3>
              <p> Por enquanto nada </p>
            </div>
          </div>';
      }else{
        // Se TIVER noticias para listar
        $executa = $con->query($sql1);
        $itemactive = "active";
        while($slide = $executa -> fetch_array()){//Loop q seleciona os slides (quantos houver)
          $link = $slide['link_carrossel'];
          
          echo 
          '<div class="carousel-item '.$itemactive.'">
            <img  style="width: auto; height: 650px" src="'.$slide['imagem_carrossel'].'" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3><a href="https://'.$link.'" target="_blank">'.$slide['titulo_carrossel'].'</a></h3>
              <p><a href="https://'.$link.'" target="_blank">'.$slide['subtitulo_carrossel'].'</a></p>
            </div>
          </div>';
          if($itemactive == "active"){ $itemactive = ""; }
    
        }
      }
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- ↑ Fim do carrossel ↑ -->


<br>
<div class="row container-fluid">
  <div class="col-sm-1"></div>

    <div class="col-sm-6">
      <br>
      <h1 style="font-size: 70px; color: #760E9A;"><strong>Notícias</strong></h1>
      <br>
      <!-- CARD NOTÍCIA 1 -->
<?php
$executa = $con->query($sql2);
  if($executa -> fetch_array() == ""){ 
    //caso nao tenha nenhum
    echo 
      '';
  }else{
    // caso tenha grupos para listar
    $executa = $con->query($sql2);
    while($noticia = $executa -> fetch_array()){//seleciona um loop de 3 items
      $texto_noticia = strlen($noticia['texto_noticia']) > 128 ? substr($noticia['texto_noticia'], 0, 128) . "..." : $noticia['texto_noticia'];
      echo '<a href="noticias.php?id_noticia='.$noticia['id_noticia'].'">';
      echo 
      '<div class="card mb-3" style="max-width: 1440px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="'.$noticia['imagem_noticia'].'" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><strong>'.$noticia['titulo_noticia'].'</strong></h4>
              <p class="card-text">'.$texto_noticia.'</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>';
      echo '
      </a>
      <br>
      <hr>
      <br>';
    }
  }
?>
  <!-- FIM CARD 1 -->
    
  <a href="todasNoticias.php" style="text-decoration: none;">
    <h2 style="text-align: center; color: #760E9A;">
      <strong>Confira mais notícias! </strong><i class="fa-solid fa-arrow-right"></i>
    </h2>
  </a>

  <br>
  <br>
  <br>
</div>

<div class="col-sm-1"></div>

<div class="col-sm-3">
  <br>
  <br>
  <div class="card mb-3">
    <a href="servicos.php">
      <img src="./img/servicos2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center; color: #760E9A;">Confira agora <i class="fa-solid fa-arrow-right"></i></h5>
      </div>
    </a>
  </div>
<div class="col-sm-1"></div>
</div>

<br>

<div class="row container-fluid">
  <div class="col-sm-1"></div>

  <div class="col-sm-5">
    <img src="./img/sapiens.png" class="img-fluid" alt="...">
  </div>
  <div class="col-sm-5">
    <h1 style="font-size: 70px; color: #760E9A;"><strong>Quem somos nós?</strong></h1>
    <h4>Nós somos o SISPUMI - Sindicato dos Servidores Públicos Municipais de Itanhaém. <br><br>Fundado com o objetivo de defender os direitos e promover as reivindicações dos servidores municipais, o SISPUMI atua em diversas frentes, como negociações salariais, melhorias nas condições de trabalho, apoio jurídico, e capacitação profissional.</h4>
    <br>
  </div>
  <div class="col-sm-1"></div>
</div>

<br>
<br>
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
              <a href="servicos.php" class="text-white"><strong>Serviços</strong></a>
            </h4>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h4 class="font-weight-bold">
              <a href="./contato.php" class="text-white"><strong>Contato</strong></a>
            </h4>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h4 class="font-weight-bold">
              <a href="./login.php" class="text-white"><strong>Painel Administrativo</strong></a>
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