<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/propos.css">
	<link rel="stylesheet" type="text/css" href="css/load.css">
	<meta name="keywords" content="debut loic, portfolio, debut, loic, développeur web, déveoppeur full-stack, développeur back-end, développeur front-end, développeur, infographie, audiovisuel, print, monteur">
	<meta name="description" content="Bienvenue dans mon recueil d'illustrations. Laissez-vous guider dans la galerie et profitez bien !">
	<meta property="og:site_name" content="Portfolio Loïc DEBUT - À Propos">
	<meta property="og:locale" content="fr_FR">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script type="text/javascript">
	$(document).ready(()=>{
		$("#pc svg .cls-1").css("fill","#0ebfff");
		$("#mobile .logo img").attr("src","img/DL_B.svg");
	})
	</script>
	<script src="js/load.js"></script>
	<script src="js/header.js"></script>
	<script src="templates/loading/welcomeLoad.js"></script>
	<title> À Propos - DEBUT Loïc </title>
</head>
<body>
<?php
	include("templates/loading/load.php");
	include("templates/header/head.php");
?>
<section id="body-content">
	<article id="titreArticle">
		<h1>À PROPOS</h1>		
	</article>

	<article id="chap1">

		<div id="cv">
			<a class="lienCV except" href="img/Développeur Web.pdf" target="_blank"><button>CV</button></a>
		</div>

		<div id="titre">
			<h2>PRÉSENTATION</h2>
		</div>
		
		<div id="paragraphe">
			<div id="presentation">
				<p>Je m'appelle Loïc DEBUT, j'ai <?= floor((mktime(date("H"),date("i"),date("s"),date("n"),date("j"),date("Y"))-mktime(10,0,0,5,12,2002))/(60*60*24*365.25)); ?> ans et je souhaiterais devenir développeur web.</p>
				<p>Pour développer des sites, j'utilise les langages :</p>
				<ul>
					<li>HTML/CSS</li>
					<li>JavaScript/jQuery</li>
					<li>ReactJS/ViteJS/NodeJS</li>
					<li>PHP/MySQL</li>
					<li>CodeIgniter</li>
					<li>TypeScript</li>
					<li>Bootstrap</li>
					<li>Wordpress</li>
				</ul>
				<p>Depuis février 2024, je suis certifié</p>
				<img src="img/opquast.png" alt=""/>
			</div>
			
			<div id="profil">
				<img src="img/DEBUT contour.png">
			</div>
		</div>
	</article>

	<hr/>

	<article id="chap2">
		<div id="titre">
			<h2>PASSIONS</h2>
		</div>
		
		<div id="paragraphe">
			<div id="profil">
				<img src="img/Passion.svg">
			</div>

			<div id="presentation">
				<p>J'aime beaucoup développer des petits sites Internet,<br/> cela me permet de partager mes passions transformées en sites Internet.</p><br/>
				<p>J'aime aussi jouer aux jeux de reflexions ainsi qu'aux jeux télévisés.</p><br/>
				<p>J'aime danser seul et j'ai fait parti d'une école de danse pendant 7 ans.</p>
			</div>
		</div>
	</article>

	<hr/>

	<article id="chap3">
		<div id="titre">
			<h2>PROJETS</h2>
		</div>
		
		<div id="paragraphe">
			<div id="presentation">
				<p>Je travaille sur plusieurs projets personnels de développement web qui sont à la fois esthétiques et fonctionnels.</p><br/>
				<p>Je suis également fier d'avoir travaillé sur des projets en équipe dans le cadre de ma formation en MMI.</p><br/>
				<p>Ces projets m'ont permis de développer des compétences en matière de gestion de projet, de communication et de travail en équipe.</p>
			</div>

			<div id="profil">
				<img src="img/Projets.svg">
			</div>
		</div>
	</article>

	<article id="btnGalerie">
		<a href="infographie.php"><button>Infographie</button></a>
		<a href="audiovisuel.php"><button>Audiviosuel</button></a>
		<a href="sites-internet.php"><button>Sites Internet</button></a>
	</article>
</section>
</body>
</html>