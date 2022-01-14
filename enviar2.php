<?php
$destinatario="niltoncoutinhodesouzajuniornil@gmail.com";


$nome= $_REQUEST['nome'];

$endereco=$_REQUEST['endereco'];

$bairro=$_REQUEST['bairro'];

$celular=$_REQUEST['celular'];

$cidade=$_REQUEST['Cidade'];

$uf=$_REQUEST['UF'];

$email= $_REQUEST['email'];

$tel=$_REQUEST['tel'];

$comentario=$_REQUEST['comentario'];


$assunto= "Contato";

$body = "\n";
$body = $body . "Teste de envio de E-mail" . "\n" ;
$body = $body . "===================================="  . "\n\n";
$body = $body . "Nome completo: " . $nome . "\n";
$body = $body . "Endereco : " . $endereco . "\n";
$body = $body . "Bairro: " . $bairro . "\n";
$body = $body . "celular: " . $celular . "\n";
$body = $body . "CEP: " . $cep . "\n";
$body = $body . "Cidade: " . $cidade . "\n";
$body = $body . "UF: " . $uf . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "tel: " . $tel . "\n";
$body = $body . "Mensagem: " . $comentario . "\n\n";
$body = $body . "===================================="   . "\n";


// envia o email 
mail($destinatario, $assunto , $body, "from: $email\r\n");

//redireciona para a página de obrigado
header("location:obrigado.html");
?>