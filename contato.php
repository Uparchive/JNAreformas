<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do e-mail
    $destinatario = "contatojnareformas@gmail.com";
    $assuntoPrefixo = "Contato do Site - ";

    // Coleta e sanitiza os dados do formulário
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $assunto = strip_tags(trim($_POST["assunto"]));
    $mensagem = strip_tags(trim($_POST["mensagem"]));

    // Validação mínima dos campos
    if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Monta o e-mail
    $emailAssunto = $assuntoPrefixo . $assunto;
    $emailConteudo = "Nome: $nome\n";
    $emailConteudo .= "Email: $email\n\n";
    $emailConteudo .= "Mensagem:\n$mensagem\n";

    $headers = "From: $nome <$email>";

    // Envia o e-mail
    if (mail($destinatario, $emailAssunto, $emailConteudo, $headers)) {
        echo "Obrigado! Sua mensagem foi enviada com sucesso.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método inválido.";
}
?>
