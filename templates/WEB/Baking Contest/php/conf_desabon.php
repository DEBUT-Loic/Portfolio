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

	if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["phone"]))
	{
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$email=$_POST["email"];
	$tel=$_POST["phone"];
	}

else {
	echo '<form action="inscription.php">
<input type="submit" value="Retour à la page d\'inscription">
</form>';
}

$sql="SELECT nomAbon, prenomAbon, mailAbon, telAbon FROM bc_abonnement WHERE nomAbon=".$nom." AND prenomAbon=".$prenom." AND mailAbon=".$email." AND telAbon=".$tel;
$req=$bdd->query($sql);
if($req){
	$sql = "DELETE FROM bc_abonnement WHERE telAbon=".$tel;
	$bdd->query($sql);
	echo "<p> Vous vous êtes désabonnés </p>"."<br/>";
	echo '<form action="../onglet/event.html">
	<input type="submit" value="Retour à la page d\'accueil">
	</form>';
}
else {
	echo "<p> Vous n'avez aucun abonnement </p>"."<br/>";
	echo '<form action="desabonner.php">
	<input type="submit" value="Retour au formulaire">
	</form>';
}
?>
</body>
</html>