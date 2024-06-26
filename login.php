<?php  
  include('conexao.php');
  session_start();
  $_SESSION['adm'] = false;
  if($_POST){

    $inLogin = $_POST['login'];
    $inSenha = $_POST['senha'];
    $sql1 = 'SELECT * FROM adm WHERE login_adm = "'.$inLogin.'"';
    $executa = $con->query($sql1);
    $adm = $executa->fetch_array();
  
    if ($executa->num_rows > 0){
      //caso exista um login compatível
      $outLogin = $adm['login_adm'];
      $outSenha = $adm['senha_adm'];
      if($outSenha == $inSenha){
        $_SESSION['adm'] = true;
        header("Location: ./painel1.php");
      }else{
        echo '<script>alert("Senha Incorreta!")</script>';
      }

    }else{
      //caso não encontrar nenhum login
      echo '<script>alert("Login Inexistente!")</script>';
    }

    
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--- Boostrap --->
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script src="./js/bootstrap.min.js"></script>
  <!--- FIM Boostrap --->
  <!--- Font Awesome (Icones) --->
  <script src="https://kit.fontawesome.com/68670ab6e8.js" crossorigin="anonymous"></script>
  <!--- Fonte POPPINS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!--- Logo na Barra -->
  <link rel="shortcut icon" type="imagex/png" href="./img/logo16.png">
	<title>Painel Administrativo - SISPUMI</title>

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
          <a class="nav-link" aria-current="page" href="./index.php" style="font-size: 25px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./servicos.php" style="font-size: 25px;">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contato.php" style="font-size: 25px;">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Fim da navbar -->
<br>

  <div class="row container-fluid">
    <div class="col-sm-3"></div>

    <div class="col-sm-6">
      <br>
      <h1 style="font-size: 60px; text-align: center; color: #760E9A;"><strong>Painel Administrativo</strong></h1>
      <hr>
      <h5 style="text-align: center;">Entre em sua conta abaixo:</h5>
      <br>
      <div style="background-color: #EFEFEF; border-radius: 10px; padding: 5%; filter: drop-shadow(15px 15px 4px rgba(00, 00, 00, 0.2));">
        
        <div class="text-center">
          <img src="./img/logo-roxa.png" class="img-fluid" alt="..." style="width: 30%;">
        </div>
        <br>

        <form method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="inputSenha" placeholder="login" name="login">
            <label for="inputSenha">Login *</label>
          </div>
          <br>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput2" placeholder="senha" name="senha">
            <label for="floatingInput2">Senha *</label>
          </div>
          <br>
          <div class="col-sm-12" style="text-align: center;">
            <button type="submit"  class="btn btn-lg text-light" style="background-color: #760E9A;">Entrar</button>
          </div>
        </form>
        
      </div>
      <br>
    </div>
  </div>
 
  <div class="col-sm-3"></div>
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
              <a href="./servicos.php" class="text-white"><strong>Serviços</strong></a>
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