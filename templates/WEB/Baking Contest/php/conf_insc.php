<!DOCTYPE html>
<html lang="fr">
<head>
<title> Baking Contest </title>
<meta charset="utf-8">
<link rel="shortcut icon" href="../img/BK.png">
<link rel="stylesheet" href="../style/confInscStyle.css">
</head>

<body>
<a href="../index.html"> <img class="logo" src="../img/logo.png"/> </a>
<?php
include("../../../Start_BDD.php");

$sql='CREATE TABLE IF NOT EXISTS bc_candidat (idCand INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                                       nomCand VARCHAR(255), 
                                       prenomCand VARCHAR(255), 
                                       civiliteCand VARCHAR(255), 
                                       ageCand INT(3), 
                                       mailCand VARCHAR(255), 
                                       telCand INT(10) UNSIGNED ZEROFILL);';

    $bdd->query($sql);

$sql='CREATE TABLE IF NOT EXISTS bc_spectateur (idSpec INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                                       nomSpec VARCHAR(255), 
                                       prenomSpec VARCHAR(255), 
                                       civiliteSpec VARCHAR(255), 
                                       ageSpec INT(3), 
                                       mailSpec VARCHAR(255), 
                                       telSpec INT(10) UNSIGNED ZEROFILL);';

    $bdd->query($sql);

	if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["age"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["civil"])) {
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$age=$_POST["age"];
	$email=$_POST["email"];
	$tel=$_POST["phone"];
	if(isset($_POST["civil"])=="mr") {
		$civil=$_POST["civil"];
	}
	else {
		$civil=$_POST["civil"];
	}

	if($_POST["event_role"]=='candidat') {
		$table='candidat';
		$suffixe="Cand";
	}
	if($_POST["event_role"]=='spectateur') {
		$table='spectateur';
		$suffixe="Spec";
	}
}
else {
	echo '<form action="inscription.php">
<input type="submit" value="Retour à la page d\'inscription">
</form>';
}

$sql = "INSERT INTO ".$table." (nom".$suffixe.",prenom".$suffixe.",civilite".$suffixe.",age".$suffixe.",mail".$suffixe.",tel".$suffixe.") values ('$nom','$prenom','$civil','$age','$email','$tel')";

	$bdd->query($sql);

	echo "<p> Merci pour votre inscription </p>"."<br/>";
	echo '<form action="../onglet/event.html">
	<input type="submit" value="Retour à la page d\'accueil">
	</form>';
?>
</body>
</html>