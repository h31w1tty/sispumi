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
    <link rel="stylesheet" href="./css/painel00.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<title>Painel Administrativo - SISPUMI</title>

	

	<style type="text/css">
    	body{
      		font-family: poppins;
    	}
	</style>
</head>
<body>
	<div class="wrapper">
        <aside id="sidebar" class="bg-dark">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Esconder</a>
                </div>
            </div>
            <div class="d-flex">
                <img src="./img/logo1.png" class="img-fluid" alt="..." style="padding: 10%;">

                <div class="sidebar-logo">
                    <a href="#">SISPUMI</a>
                </div>
            </div>
            <div class="d-flex">
                <div class="sidebar-logo text-light text-center" style="padding: 10%; justify-content: center; font-size: 25px;">
                    <strong>Painel Administrativo</strong>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="painel00.html" class="sidebar-link">
                        <i class="lni lni-gallery"></i>
                        <span><strong>Carrossel</strong></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="painel01.html" class="sidebar-link">
                        <i class="lni lni-rocket"></i>
                        <span><strong>Serviços</strong></span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="painel02.html" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span><strong>Notícias</strong></span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="login.html" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span><strong>Sair</strong></span>
                </a>
            </div>
        </aside>

        <div class="col-sm-1" style="background-color: #fafbfe;"></div>
        <div class="main p-3">
            <br>
            <br>
                <h1 style="color: #760E9A;"><strong>Carrossel</strong></h1>
                <hr>
                <h4>Edite as configurações referentes ao carrosel da página.</h4>
                <br>
                <div class="text-center">
                <div class="row">

                    

                    <!-- <div class="col-sm-1">
                        <ul class="list-group list-group-flush bg-primary">
                          <li class="list-group-item"><strong>ID</strong></li>
                          <li class="list-group-item"><strong>01</strong></li>
                          <li class="list-group-item bg-body-secondary"><strong>02</strong></li>
                          <li class="list-group-item"><strong>03</strong></li>
                          <li class="list-group-item bg-body-secondary"><strong>04</strong></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="list-group list-group-flush bg-primary">
                          <li class="list-group-item"><strong>TÍTULO</strong></li>
                          <li class="list-group-item">Notícia para carrossel - 01</li>
                          <li class="list-group-item bg-body-secondary">Notícia para carrossel - 02</li>
                          <li class="list-group-item">Notícia para carrossel - 03</li>
                          <li class="list-group-item bg-body-secondary">Notícia para carrossel - 04</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="list-group list-group-flush bg-primary">
                          <li class="list-group-item"><strong>SUBTITULO</strong></li>
                          <li class="list-group-item">Subtitulo - 01</li>
                          <li class="list-group-item bg-body-secondary">Subtitulo - 02</li>
                          <li class="list-group-item">Subtitulo - 03</li>
                          <li class="list-group-item bg-body-secondary">Subtitulo - 04</li>
                        </ul>
                    </div>
                    <div class="col-sm-1">
                        <ul class="list-group list-group-flush bg-primary">
                          <li class="list-group-item"><strong>IMAGEM</strong></li>
                          <li class="list-group-item"><img src="adm-carrossel.jpg" class="img-fluid" alt="..." style="max-width:50%;"></li>
                          <li class="list-group-item bg-body-secondary"><img src="adm-carrossel.jpg" class="img-fluid" alt="..." style="max-width:50%;"></li>
                          <li class="list-group-item"><img src="adm-carrossel.jpg" class="img-fluid" alt="..." style="max-width:50%;"></li>
                          <li class="list-group-item bg-body-secondary"><img src="adm-carrossel.jpg" class="img-fluid" alt="..." style="max-width:50%;"></li>
                        </ul>
                    </div>
                    <div class="col-sm-1 text-center">
                        <ul class="list-group list-group-flush bg-primary">
                          <li class="list-group-item"><strong>STATUS</strong></li>
                          <li class="list-group-item">ATIVO</li>
                          <li class="list-group-item bg-body-secondary">ATIVO</li>
                          <li class="list-group-item">INATIVO</li>
                          <li class="list-group-item bg-body-secondary">ATIVO</li>
                        </ul>
                    </div> -->

                </div>
                <br>
                <a class="btn btn-success btn-lg" href="painel-carrossel.html" role="button">+ Adicionar conteúdo</a>
            </div>
        </div>
        <div class="col-sm-1" style="background-color: #fafbfe;"></div>
    
    <script src="./js/script.js"></script>

</body>
</html>