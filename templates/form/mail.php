<?php
session_start();

$nom=strtoupper(htmlspecialchars($_POST['nom']));
$prenom=ucfirst(htmlspecialchars($_POST['prenom']));
$mail=htmlspecialchars($_POST['mail']);
$objet=htmlspecialchars($_POST['objet']);
$message=htmlspecialchars($_POST['message']);

$f=fopen("contact.txt", "a+");
$write=fwrite($f, $nom." ".$prenom."\n".$mail."\n".$objet."\n".$message."\n\n");

if($write===false) {
	$_SESSION['txt']="false";
}
else {
	$_SESSION['txt']="true";
}

fclose($f);

header("Location:../../contact.php");
?>