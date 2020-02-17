<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
//====================================================

//Seta os Headers (Alterar somente caso necessario) 
//==================================================== 
$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "from: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$assunto = "Dados do formulario";
//====================================================

//Monta o Corpo da Mensagem
//====================================================
$conteudo = "Nome: " . $nome . "\n"; 
$conteudo .= "Email: " . $email . "\n";
$conteudo .= "Mensagem: " . $mensagem . "\n"; 
//====================================================

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'wordafilmes@gmail.com';

//Enviando o email 
//==================================================== 
$status = mail($email_to, $assunto, nl2br($conteudo), $headers);

if ($status):
  // Enviada com sucesso
  header('location:formulario.php?status=sucesso');
else:
  // Se der erro
  header('location:formulario.php?status=erro');
endif;
?>
?>