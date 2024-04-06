<!DOCTYPE html>
<html lang="fr">
<head>
<title> Baking Contest </title>
<meta charset="utf-8">
<link rel="shortcut icon" href="../img/BK.png">
<link rel="stylesheet" href="../style/abonnerStyle.css">
</head>
<body>
	<a href="../index.html">
       <img class="logo" src="../img/logo.png"/>
    </a> 
       <div id="inscrire">
		<form action="conf_desabon.php" id="insc" method="post">
			<label for="nom"> Nom : </label><br/>
			<input type="text" id="nom" name="nom" required><br/>
			<label for="prenom"> Prénom : </label> <br/>
			<input type="text" id="prenom" name="prenom" required> <br/>
			<label for="email"> Adresse Mail : </label><br/>
			<input type="mail" id="email" name="email" required> <br/>
			<label for="phone"> Téléphone : </label><br/>
			<input type="tel" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" id="phone" name="phone" placeholder="ex: 0123456789" required> <br/> <br/>
			<input type="submit" form="insc" value="Se désabonner"/>
		</form>
	</div>
</body>
</html>