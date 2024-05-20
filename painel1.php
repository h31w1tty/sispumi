<?php
    include('conexao.php');
    $sql1 = 'SELECT * FROM carrossel ORDER BY id_carrossel DESC'; //listar carrosseis
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
    <link rel="stylesheet" href="./css/painel00.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<title>Painel Administrativo - SISPUMI</title>

	

	<style type="text/css">
    	body{
      		font-family: poppins;
    	}
        a {
            text-decoration: none;
            color: black;
        }
	</style>
</head>
<body>

	<div class="wrapper">

        <!-- ↓ NAVEGAÇÃO LATERAL ↓ -->
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
                    <a href="./painel1.php" class="sidebar-link">
                        <i class="lni lni-gallery"></i>
                        <span><strong>Carrossel</strong></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./painel2.php" class="sidebar-link">
                        <i class="lni lni-rocket"></i>
                        <span><strong>Serviços</strong></span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="./painel3.php" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span><strong>Notícias</strong></span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="login.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span><strong>Sair</strong></span>
                </a>
            </div>
        </aside>
        <!-- ↑ NAVEGAÇÃO LATERAL ↑ -->

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

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TÍTULO</th>
                                <th>SUBTÍTULO</th>
                                <th>IMAGEM</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    $executa = $con ->query($sql1);
                                    while($slide = $executa -> fetch_array()){
                                        $subtitulo_carrossel = $slide['subtitulo_carrossel'] > 40 ? substr($slide['subtitulo_carrossel'], 0, 40) . "..." : $slide['subtitulo_carrossel'];
                                        if($slide['status_carrossel'] == 1){
                                            $status = "ATIVO";
                                        }else{
                                            $status = "INATIVO";
                                        }
                                        echo '
                                        <a href="painel-carrossel.php?id_slide='.$slide['id_carrossel'].'">
                                        <div>
                                        <tr>
                                            <td><a href="painel-carrossel.php?id_slide='.$slide['id_carrossel'].'">'.$slide['id_carrossel'].'</a></td>
                                            <td><a href="painel-carrossel.php?id_slide='.$slide['id_carrossel'].'">'.$slide['titulo_carrossel'].'</a></td>
                                            <td><a href="painel-carrossel.php?id_slide='.$slide['id_carrossel'].'">'.$subtitulo_carrossel.'</a></td>
                                            <td><a href="painel-carrossel.php?id_slide='.$slide['id_carrossel'].'"><img src="'.$slide['imagem_carrossel'].'" alt="link-img" style="height: 5vh;" ></a></td>
                                            <td><a href="painel-carrossel.php?id_slide='.$slide['id_carrossel'].'">'.$status.'</a></td>
                                        </tr>';
                                    }
                                ?>
                        </tbody>
                    </table>

                </div>
                <br>
                <a class="btn btn-success btn-lg" href="painel-carrossel.php?id_slide=0" role="button">+ Adicionar conteúdo</a>
            </div>
        </div>
        <div class="col-sm-1" style="background-color: #fafbfe;"></div>
    
    <script src="./js/script.js"></script>

</body>
</html>