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

	if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["age"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["civil"]))
	{
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
	}
else {
	echo '<form action="inscription.php">
<input type="submit" value="Retour à la page d\'inscription">
</form>';
}

$bdd->query($sql);

$sql = "INSERT INTO bc_inscription (nomAbon,prenomAbon,civiliteAbon,ageAbon,mailAbon,telAbon) values ('$nom','$prenom','$civil','$age','$email','$tel')";
	$bdd->query($sql);

	echo "<p> Merci pour votre inscription </p>"."<br/>";
	echo '<form action="../onglet/event.html">
	<input type="submit" value="Retour à la page d\'accueil">
	</form>';
?>
</body>
</html>