<?php
$destinatario="giamaral2609@gmail.com";

$sexo=$_REQUEST['sexo'];

$nome= $_REQUEST['nome'];

$rg=$_REQUEST['rg'];

$cpf=$_REQUEST['cpf'];

$nascimento=$_REQUEST['nascimento'];

$rua=$_REQUEST['rua'];

$numero=$_REQUEST['numero'];

$complemento=$_REQUEST['complemento'];

$bairro=$_REQUEST['bairro'];

$referencia=$_REQUEST['referencia'];

$cep=$_REQUEST['cep'];

$cidade=$_REQUEST['cidade'];

$uf=$_REQUEST['uf'];

$email= $_REQUEST['email'];


$def=$_REQUEST['def'];

$comentario=$_REQUEST['comentario'];


$body = "\n";
$body = $body . "Teste de envio de E-mail" . "\n" ;
$body = $body . "===================================="  . "\n\n";
$body = $body . "Sexo: " . $sexo . "\n";
$body = $body . "Nome completo: " . $nome . "\n";
$body = $body . "RG: " . $rg . "\n";
$body = $body . "CPF: " . $cpf . "\n";
$body = $body . "Nascimento: " . $nascimento . "\n";
$body = $body . "Rua : " . $rua . "\n";
$body = $body . "Numero: " . $numero. "\n";
$body = $body . "Complemento: " . $complemento . "\n";
$body = $body . "Bairro: " . $bairro . "\n";
$body = $body . "Referência: " . $referencia . "\n";
$body = $body . "CEP: " . $cep . "\n";
$body = $body . "Cidade: " . $cidade . "\n";
$body = $body . "UF: " . $uf . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Deficiência: " . $def . "\n";
$body = $body . "Mensagem: " . $comentario . "\n\n";
$body = $body . "===================================="   . "\n";


// envia o email 
mail($destinatario, $body, "from: $email\r\n");

//redireciona para a página de obrigado
header("location:obrigado.html");
?>