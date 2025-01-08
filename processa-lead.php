<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    $para = "maycondm86@gmail.com"; // Substitua pelo seu e-mail
    $assunto = "Novo lead do site da Construtora";
    $corpo = "Você recebeu uma nova mensagem do site da Construtora:\n\n";
    $corpo .= "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Mensagem:\n$mensagem\n";

    $cabecalhos = "From: noreply@seusite.com\r\n"; // Substitua por um e-mail válido do seu domínio
    $cabecalhos .= "Reply-To: $email\r\n";

    if (mail($para, $assunto, $corpo, $cabecalhos)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>
