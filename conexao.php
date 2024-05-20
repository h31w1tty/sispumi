<?php
$servidor = "localhost";
$usuario = "root";
$senha = "usbw";
$banco = "midiasispumi";
$con = new mysqli($servidor, $usuario, $senha, $banco);
mysqli_set_charset($con, "utf8");
if(!$con){
    echo'falha ao conectar!';
}