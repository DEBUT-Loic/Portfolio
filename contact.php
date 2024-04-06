<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/load.css">
	<meta name="keywords" content="debut loic, portfolio, debut, loic, développeur web, déveoppeur full-stack, développeur back-end, développeur front-end, développeur, infographie, audiovisuel, print, monteur">
	<meta name="description" content="Bienvenue dans mon recueil d'illustrations. Laissez-vous guider dans la galerie et profitez bien !">
	<meta property="og:site_name" content="Portfolio Loïc DEBUT - Contact">
	<meta property="og:locale" content="fr_FR">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script type="text/javascript">
	$(document).ready(()=>{
		$("#pc svg .cls-1").css("fill","#ffb50e");
		$("#mobile .logo img").attr("src","img/DL_O.svg");

		var sessionIsset="<?php if(isset($_SESSION["txt"])) {echo $_SESSION["txt"];} ?>";
		
		if(sessionIsset!=="") {
			if(sessionIsset) {
				alert("Votre mail a bien été envoyé");
			}
			else {
				alert("Une erreur est survenue, veuillez réessayer");
			}
		}
			
	})
	</script>
	<script src="js/load.js"></script>
	<script src="templates/loading/welcomeLoad.js"></script>
	<script src="js/header.js"></script>
	<title> Contact - DEBUT Loïc </title>
</head>
<body>
<?php
	include("templates/loading/load.php");
	include("templates/header/head.php");
?>

<section id="body-content">
	<article id="titreArticle">
		<h1>CONTACT</h1>

		<article id="contactArticle">
			<div id="contactForm">
				<form action="templates/form/mail.php" method="post">
					<div>
						<label for="nom">NOM</label>
						<input type="text" id="nom" name="nom" placeholder="NOM" autofocus required>
					</div>
					<div>
						<label for="prenom">Prénom</label>
						<input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
					</div>
					<div>
						<label for="mail">Email</label>
						<input type="text" id="mail" name="mail" placeholder="Email" required>
					</div>
					<div>
						<label for="objet">Objet</label>
						<input type="text" id="objet" name="objet" placeholder="Objet" required>
					</div>
					<div>
						<label for="message">Message</label>
						<textarea id="message" name="message" placeholder="Entrez votre message" rows="10" required></textarea>
					</div>
					<input type="submit" class="btnEnvoyer" value="Envoyer"/>
				</form>
			</div>
			<hr/>
			<div id="contactMenu">
				<a href="tel:0769626635" class="except">
					<div>
						<?php include("img/Icon_tel.svg"); ?>
						<p>07 69 62 66 35</p>
					</div>
				</a>

				<a href="mailto:debut.loic@hotmail.com" class="except">
					<div>
						<?php include("img/Icon_mail.svg"); ?>
						<p>debut.loic@hotmail.com</p>
					</div>
				</a>

				<a href="https://www.linkedin.com/in/lo%C3%AFc-debut/" class="except" target="_blank">
					<div>
						<?php include("img/Icon_LinkedIn.svg"); ?>
						<p>Loïc DEBUT</p>
					</div>
				</a>
			</div>
		</article>

	</article>
</section>
</body>
</html>
<?php
	unset($_SESSION['txt']);
?>