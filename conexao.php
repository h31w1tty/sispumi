<?php
$servidor = "localhost";
$usuario = "root";
$senha = "usbw";
$banco = "midiasispumi";
$con = new mysqli($servidor, $usuario, $senha, $banco);
if(!$con){
    echo'falha ao conectar!';
}