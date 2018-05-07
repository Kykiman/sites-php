<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];


$to = 'kylian.manzini@cpnv.ch';
$email_subject = "Contact depuis le porfolio";
$email_body = "Contact de $name.\n\n"."Son Email: $email_address\n\nSon Message:\n$message";
$headers = "From: kmanzini@mediamatique.ch\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>