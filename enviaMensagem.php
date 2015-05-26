<?php

$nome = $_POST[nome];
$email = $_POST[email];
$assunto = $_POST[assunto];
$mensagem = $_POST[mensagem];

$camposOk = true;
$msg = "";

if (empty($nome)) {
    $msg = $msg . "NOME inválido \n";
    $camposOk = false;
} 
if (empty($email)) {
    $msg = $msg . "EMAIL inválido \n";
    $camposOk = false;
}
if (empty($assunto)) {
    $msg = $msg . "ASSUNTO inválido \n";
    $camposOk = false;
}
if(empty($mensagem)) {
    $msg = $msg . "MENSAGEM inválida \n";
    $camposOk = false;
} if ($camposOk) { 

require("phpmailer/class.phpmailer.php");
include_once ("autentica.php");

$mail = new PHPMailer(); 
$mail->IsSMTP(); 

$mail->Host = "smtp.montibellersolutions.com.br"; 
$mail->SMTPAuth = true; 
$mail->Username = $login; 
$mail->Password = $senha; 
$mail->From = $email; 
$mail->FromName = $nome; 
$mail->AddAddress('suporte1@montibellersolutions.com.br','Suporte 1');
$mail->AddAddress('suporte2@montibellersolutions.com.br','Suporte2');
$mail->AddAddress('suporte3@montibellersolutions.com.br','Suporte3');
$mail->AddAddress('jeovanne@montibellersolutions.com.br','Jeovanne'); 
$mail->WordWrap = 50; 
$mail->IsHTML(true); 
$mail->Subject = $assunto; 
$mail->Body = $mensagem;


// Verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
if(!$mail->Send())   {
echo "<span class='style1'>Mensagem não enviada para: $para ($id)</span><br>";
echo "Erro: " . $mail->ErrorInfo;
$alerta = "ERRO ao tentar enviar a mensagem! Tente novamente!";
header("Location:contato.php?Erro=$alerta");

}
	$alerta = "Mensagem ENVIADA com SUCESSO!";
	header("Location:contato.php?Sucesso=$alerta");
} else {
	$alerta = "ERRO ao tentar enviar a mensagem! Preencha os campos corretamente!";
	header("Location:contato.php?Erro=$alerta");
}

?>