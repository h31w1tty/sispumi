<?php
    include('conexao.php');
    session_start();
    if (isset($_GET['id_slide']) && $_SESSION['adm'] == true) {
        $id_carrossel = $_GET['id_slide'];

        if($id_carrossel != 0){
            $sql1 = 'SELECT * FROM carrossel WHERE id_carrossel ='.$id_carrossel;
            $executa = $con->query($sql1);
            $carrossel = $executa->fetch_array();
            $id  = $carrossel['id_carrossel'];
            $titulo = $carrossel['titulo_carrossel'];
            $descricao = $carrossel['subtitulo_carrossel'];
            $link = $carrossel['link_carrossel'];
            $imagem = $carrossel['imagem_carrossel'];
            if($carrossel['status_carrossel'] == 1){
                $status = "Online!";
            }else{
                $status = "Desativado";
            }
        }else{
            $id  = "";
            $titulo = "Novo Slide";
            $descricao = "";
            $link = "";
            $imagem = "./img/logo-escura.png";
            $status = "Desativado";
        }

    }else{
        header("Location: ./painel1.php");
    }

    if($_POST){
        
        $btn = $_POST['btn'];
        if($btn == "deletar"){
            $sql2 = 'DELETE FROM carrossel WHERE id_carrossel ='.$id_carrossel;
            $executa = $con->query($sql2);
            header("Location: ./painel1.php");
        }else if($btn == "salvar" && $id_carrossel == 0){
            $titulo = $_POST['titulo'];
            $subtitulo = $_POST['subtitulo'];
            $imagem = $_POST['imagem'];
            $link = $_POST['link'];
            $status = $_POST['status'];

            $sql3 = 'INSERT INTO carrossel 
            (id_carrossel, titulo_carrossel, subtitulo_carrossel, imagem_carrossel, link_carrossel, status_carrossel, id_adm) VALUES
            (null, "'.$titulo.'", "'.$subtitulo.'", "'.$imagem.'", "'.$link.'", '.$status.', null)';
            $executa = $con->query($sql3);
            header("Location: ./painel1.php");
        }else if($btn == "salvar" && $id_carrossel != 0){
            $titulo = $_POST['titulo'];
            $subtitulo = $_POST['subtitulo'];
            $imagem = $_POST['imagem'];
            $link = $_POST['link'];
            $status = $_POST['status'];

            $sql4 = 'UPDATE carrossel
            SET titulo_carrossel = "'.$titulo.'", subtitulo_carrossel = "'.$subtitulo.'", imagem_carrossel = "'.$imagem.'", link_carrossel = "'.$link.'", status_carrossel = '.$status.' WHERE id_carrossel ='.$id_carrossel;
            $executa = $con->query($sql4);
            header("Location: ./painel1.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--- Boostrap --->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
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

        a{
            text-decoration: none;
        }
	</style>
    <script>
        function excluir() {
            var confirmacao = false;
            confirmacao = confirm("TEM CERTEZA QUE QUER EXCLUIR O CARROSSEL: <?php echo $titulo; ?>");
            if (confirmacao) {
                enviarFormulario();
            } else {
                
            }
        }
        function enviarFormulario() {
            document.querySelector("#formExcluir").submit();
        }
        function botao(){
            let status = document.querySelector("#status");
            let alternador = document.querySelector("#alternador");
            
            if(alternador.textContent == "Online!"){
                alternador.textContent  = "Desativado";
                status.value = 0;
            }else{
                alternador.textContent = "Online!";
                status.value = 1;
            }
        }
    </script>
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

        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true" data-delay="5000">
            <div class="toast-body">
                Hello, world! This is a toast message.
                <div class="mt-2 pt-2 border-top">
                    <button type="button" class="btn btn-primary btn-sm">Take action</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                </div>
            </div>
        </div>
        
        <div class="col-sm-1" style="background-color: #fafbfe;"></div>
        <div class="main p-3">
            <br>
            <br>
            <h1 style="color: #760E9A;"><strong>Carrossel | <?php echo $titulo; ?> </strong></h1>
            <hr>
            <h4>Faça as alterações necessárias referentes ao carrossel da página.</h4>
            <br>
            <div class="text-center">
                <div class="row">

                    <div class="col-sm-8">

                        <form method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text">ID</span>
                            <input name="id" type="text" class="form-control" placeholder="01" aria-label="Username" readonly value="<?php echo $id; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Titulo</span>
                            <input name="titulo" type="text" class="form-control" placeholder="Seu título aqui" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $titulo; ?>" maxlength="60">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Subtítulo</span>
                            <textarea name="subtitulo" class="form-control" aria-label="With textarea" maxlength="100"><?php echo $descricao; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">Imagem</span>
                                <input name="imagem" type="text" class="form-control" id="basic-url" placeholder="Link da sua Imagem" aria-describedby="basic-addon3 basic-addon4" value="<?php echo $imagem; ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">Link</span>
                                <input name="link" type="text" class="form-control" id="basic-url" placeholder="www.seuLink.com" aria-describedby="basic-addon3 basic-addon4" value="<?php echo $link; ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-danger" name="btn" onclick="excluir()" value="deletar" data-bs-toggle="tooltip" data-bs-placement="left" title="Apaga a postagem atual.">Deletar</button>
                            <button type="button" class="btn btn-warning" name="btn" onclick="botao()" id="alternador" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ativa e desativa a postagem sem precisar deletá-la."><?php echo $status; ?></button>
                            <button type="submit" class="btn btn-success" name="btn" value="salvar" data-bs-toggle="tooltip" data-bs-placement="right" title="Salva todas as mudanças e atualiza o Site.">Salvar</button>
                        </div>
                        <input type="hidden" value="0" name="status" id=status>
                        </form>

                        <form method="post" id="formExcluir">
                            <input type="hidden" name="btn" value="deletar">
                        </form>

                    </div>
                    <div class="col-sm-3">
                    <div style="border-radius: 10px; text-align: center; background-color: lightblue; background-color: lightgray;"> 
                            Imagem atual 
                            <img src="<?php echo $imagem; ?>" class="img-fluid" style="border-radius: 10px; padding: 2px;"></div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1" style="background-color: #fafbfe;"></div>
    
    <script src="./js/script.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>

</body>
</html>