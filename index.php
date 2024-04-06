<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://debut-loic.fr/img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/load.css">
	<meta name="keywords" content="debut loic, portfolio, debut, loic, développeur web, déveoppeur full-stack, développeur back-end, développeur front-end, développeur, infographie, audiovisuel, print, monteur">
	<meta name="description" content="Bienvenue dans mon recueil d'illustrations. Laissez-vous guider dans la galerie et profitez bien !">
	<meta name="robots" content="index,follow"/>
	<meta name="copyright" content="© DEBUT Loïc 2023" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="Portfolio Loïc DEBUT">
	<meta property="og:site_name" content="Portfolio Loïc DEBUT">
	<meta property="og:locale" content="fr_FR">
	<meta property="og:image" content="https://debut-loic.fr/img/icon.png">
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-E34HH1FCTQ"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-E34HH1FCTQ');
	</script>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="js/load.js"></script>
	<script src="js/header.js"></script>
	<script src="templates/loading/welcomeLoad.js"></script>
	<title> Portfolio - DEBUT Loïc </title>
</head>
<body>

<?php
	include("templates/loading/load.php");
	include("templates/header/head.php");
?>

<section id="body-content">
	<article>
		<h1>PORTFOLIO</h1>
		<div>
			<p>Bienvenue dans mon recueil d'illustrations.</p>
			<p>Laissez-vous guider dans la galerie et profitez bien !</p>
		</div>
		<div id="button">
			<a href="propos.php#btnGalerie"><button>La Galerie</button></a>
			<a href="contact.php"><button>Contactez-moi</button></a>
		</div>
	</article>
</section>

</body>
</html>