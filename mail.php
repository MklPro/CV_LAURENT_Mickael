<?php 

$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['subject'];
$_POST['sujet'];
$formcontent="From: $nom \n Message: $message";
$destinataire = "laurentm18.pro@gmail.com";
$subject = $_POST['sujet'];
$mailheader = "From: $email \r\n";

mail($destinataire, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

?>