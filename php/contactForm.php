<?php
if(isset($_POST['name']) && isset($_POST['contactEmail']) && isset($_POST['message']) && isset($_POST['title'])){
	
	$email_remetente = $_POST['contactEmail'];

	$headers  = "MIME-Version: 1.1\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\n";
	$headers .= "From: $email_remetente\r\n"; 
	$headers .= "Return-To: \r\n"; 
	$headers .= "Return-Path: \r\n";

	$to       = "";
	$subject  = $_POST['title'];
	$message  = $_POST['message'];

	if(mail($to, $subject, $message, $headers)){ echo "Enviado com sucesso!"; }else{ echo "# Falha no envio."; };
}
?>
