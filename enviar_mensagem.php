<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    
    $destinatario = "exemplo@seudominio.com";
    $assunto = "Mensagem do formulário de contato";
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Mensagem:\n$mensagem\n";

    mail($destinatario, $assunto, $corpo);

    header("Location: detalhes_do_produto.html");
    exit;
}
?>