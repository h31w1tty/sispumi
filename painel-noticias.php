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
                <h1 style="color: #760E9A;"><strong>Notícias | Notícia - 01 </strong></h1>
                <hr>
                <h4>Faça as alterações necessárias para a notícia da página.</h4>
                <br>
                <div class="text-center">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Titulo</span>
                            <input type="text" class="form-control" placeholder="Notícia - 01" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">Autor</span>
                                <input type="text" class="form-control" id="basic-url" placeholder="Lorem Ipsum" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Descrição</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">Link</span>
                                <input type="text" class="form-control" id="basic-url" placeholder="www.sispumi.com/noticias-01.html" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-danger">Deletar</button>
                            <button type="button" class="btn btn-warning">Suspender</button>
                            <button type="button" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="noticia.jpg" class="img-fluid" style="border-radius: 10px;">
                        <br>
                        <br>
                        <div style="border-radius: 10px; text-align: center; background-color: lightblue; background-color: lightgray;"> Selecione a Imagem</div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-1">
                            <div class="input-group mb-3">
                                <span class="input-group-text">ID</span>
                                <input type="text" class="form-control" placeholder="01" aria-label="Username">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-sm-1" style="background-color: #fafbfe;"></div>
    
    <script src="./js/script.js"></script>

</body>
</html>