<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $telefone = $_POST["phone"];
    $servico = $_POST["service"];
    $mensagem = $_POST["message"];

    $destinatario = "kesllyalbuquerque@gmail.com";
    $assunto = "Novo contato do site: $nome";
    $corpo = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nServiço: $servico\n\nMensagem:\n$mensagem";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($destinatario, $assunto, $corpo, $headers)) {
      echo "Mensagem enviada com sucesso!";
    } else {
      echo "Erro ao enviar mensagem.";
    }
  }
?>
