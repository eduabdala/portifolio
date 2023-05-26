<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  $para = 'eduardoabdala@icloud.com'; // Substitua pelo seu endereço de e-mail
  $assunto = 'Novo contato do formulário de portfólio';
  $corpo_email = "Nome: $nome\n";
  $corpo_email .= "E-mail: $email\n";
  $corpo_email .= "Mensagem: $mensagem\n";

  // Enviar e-mail
  if (mail($para, $assunto, $corpo_email)) {
    echo 'Obrigado! Sua mensagem foi enviada.';
  } else {
    echo 'Desculpe, ocorreu um erro ao enviar a mensagem.';
  }
}
?>
