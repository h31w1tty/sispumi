<?php
    include('conexao.php');
    if (isset($_GET['id_servico'])) {
        $id_servico = $_GET['id_servico'];

        if($id_servico != 0){ //caso tenha sido selecionado uma tupla, vai nomear as variaveis com as informações do banco
            $sql1 = 'SELECT * FROM servico WHERE id_servico ='.$id_servico;
            $executa = $con->query($sql1);
            $servico = $executa->fetch_array();
            $id  = $servico['id_servico'];
            $titulo = $servico['nm_servico'];
            $descricao = $servico['desc_servico'];
            $link = $servico['link_servico'];
            $imagem = $servico['imagem_servico'];
            if($servico['status_servico'] == 1){
                $status = "Online!";
            }else{
                $status = "Desativado";
            }
        }else{//caso esteja no modo de adicionar nova tupla, deixar variaveis em branco(necessário)
            $id  = "";
            $titulo = "Novo Serviço";
            $descricao = "";
            $link = "";
            $imagem = "./img/logo-escura.png";
            $status = "Desativado";
        }

    }else{
        header("Location: ./painel2.php");
    }

    if($_POST){//caso tenha apertado algum botao
        
        $btn = $_POST['btn'];
        if($btn == "deletar"){//se o botao for o deletar, vai deletar a tupla
            $sql2 = 'DELETE FROM servico WHERE id_servico ='.$id_servico;
            $executa = $con->query($sql2);
            header("Location: ./painel2.php");
        }else if($btn == "salvar" && $id_servico == 0){//se o botão for o salvar e estiver no modo de novo item, vai adicionar nova tupla
            $titulo = $_POST['titulo'];
            $subtitulo = $_POST['subtitulo'];
            $imagem = $_POST['imagem'];
            $link = $_POST['link'];
            $status = $_POST['status'];

            $sql3 = 'INSERT INTO servico 
            (id_servico, nm_servico, desc_servico, imagem_servico, link_servico, status_servico, adm_id_adm) VALUES
            (null, "'.$titulo.'", "'.$subtitulo.'", "'.$imagem.'", "'.$link.'", '.$status.', null)';
            $executa = $con->query($sql3);
            header("Location: ./painel2.php");
        }else if($btn == "salvar" && $id_servico != 0){//caso o botao for o salvar e nao estiver no modo de novo item, vai atualizar a tupla
            $titulo = $_POST['titulo'];
            $subtitulo = $_POST['subtitulo'];
            $imagem = $_POST['imagem'];
            $link = $_POST['link'];
            $status = $_POST['status'];

            $sql4 = 'UPDATE servico
            SET nm_servico = "'.$titulo.'", desc_servico = "'.$subtitulo.'", imagem_servico = "'.$imagem.'", link_servico = "'.$link.'", status_servico = '.$status.' WHERE id_servico ='.$id_servico;
            $executa = $con->query($sql4);
            header("Location: ./painel2.php");
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
	</style>
    <script>
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
                <a href="./login.php" class="sidebar-link">
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
            <h1 style="color: #760E9A;"><strong>Serviços | <?php echo $titulo ?> </strong></h1>
            <hr>
            <h4>Faça as alterações necessárias para o serviço da página.</h4>
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
                            <input name="titulo" type="text" class="form-control" placeholder="Seu título aqui" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $titulo; ?> " maxlength="40">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Descrição</span>
                            <textarea name="subtitulo" class="form-control" aria-label="With textarea" maxlength="200"><?php echo $descricao; ?></textarea>
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
                            <button type="submit" class="btn btn-danger" name="btn" value="deletar" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Apaga a postagem atual.">Deletar</button>
                            <button type="button" class="btn btn-warning" name="btn" onclick="botao()" id="alternador" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ativa e desativa a postagem sem precisar deletá-la."><?php echo $status; ?></button>
                            <button type="submit" class="btn btn-success" name="btn" value="salvar" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salva todas as mudanças e atualiza o Site.">Salvar</button>
                        </div>
                        <input type="hidden" value="1" name="status" id=status>
                        </form>

                    </div>
                    <div class="col-sm-3">
                        <img src="<?php echo $imagem; ?>" class="img-fluid" style="border-radius: 10px;">
                        <br>
                        <br>
                        <div style="border-radius: 10px; text-align: center; background-color: lightblue; background-color: lightgray;"> sua imagem</div>
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