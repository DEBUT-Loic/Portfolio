<!DOCTYPE html>
<html lang="fr">
<head>
<title> Baking Contest </title>
<meta charset="utf-8">
<link rel="shortcut icon" href="../img/BK.png">
<link rel="stylesheet" href="../style/inscStyle.css">
</head>

<body>
	<a href="../onglet/event.html">
	<img class="logo" src="../img/logo.png"/>
</a>
<div id="inscrire">
		<form action="conf_insc.php" id="insc" method="post">
			<label for="civil" > Civilité : </label>
			<input type="radio" name="civil" value="Mr" id="mr">
			<label for="mr"> M </label>
			<input type="radio" name="civil" value="Mme" id="mme">
			<label for="mme"> Mme </label> <br/> <br/>
			<label for="nom"> Nom : </label><br/>
			<input type="text" id="nom" name="nom" required><br/>
			<label for="prenom"> Prénom : </label> <br/>
			<input type="text" id="prenom" name="prenom" required> <br/>
			<label for="age"> Âge : </label><br/>
			<input type="text" id="age" name="age"> <br/>
			<label for="email"> Adresse Mail : </label><br/>
			<input type="mail" id="email" name="email" required> <br/>
			<label for="phone"> Téléphone : </label><br/>
			<input type="tel" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" id="phone" name="phone" placeholder="ex: 0123456789" required> <br/> <br/>
			<label for="event_role"> Êtes-vous candidat ou spectateur de l'évènement ? </label>
			<input type="radio" name="event_role" value="candidat" id="candidat">
			<label for="candidat"> Candidat </label>
			<input type="radio" name="event_role" value="spectateur" id="spectateur">
			<label for="spectateur"> Spectateur </label> <br/>
			<input type="submit" form="insc"/>
		</form>
</div>
</body>
</html>