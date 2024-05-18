<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nome = htmlspecialchars($_POST['nome']);
//     $email = htmlspecialchars($_POST['email']);
//     $telefone = htmlspecialchars($_POST['telefone']);
//     $assunto = htmlspecialchars($_POST['assunto']);
//     $mensagem = htmlspecialchars($_POST['mensagem']);

//     $to = "heiwitty.16@gmail.com"; // Substitua pelo seu endereço de e-mail
//     $subject = "Nova mensagem do formulário de contato";
//     $body = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nAssunto: $assunto\n\nMensagem:\n$mensagem";
//     $headers = "From: $email";

//     if (mail($to, $subject, $body, $headers)) {
//         echo "Mensagem enviada com sucesso!";
//     } else {
//         echo "Falha ao enviar a mensagem.";
//     }
// } procedimento complicado a ser repensado
header("Location: ./index.php");
?>