<?php include('templates/Start_BDD.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/audiovisuel.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/load.css">
	<meta name="keywords" content="debut loic, portfolio, debut, loic, développeur web, déveoppeur full-stack, développeur back-end, développeur front-end, développeur, infographie, audiovisuel, print, monteur">
	<meta name="description" content="Bienvenue dans mon recueil d'illustrations. Laissez-vous guider dans la galerie et profitez bien !">
	<meta property="og:site_name" content="Portfolio Loïc DEBUT - Audiovisuel">
	<meta property="og:locale" content="fr_FR">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script type="text/javascript">
	$(document).ready(()=>{
		$("#pc svg .cls-1").css("fill","#68eb22");
		$("#mobile .logo img").attr("src","img/DL_V.svg");
	})
	</script>
	<script src="js/load.js"></script>
	<script src="js/header.js"></script>
	<script src="templates/loading/welcomeLoad.js"></script>
	<script src="js/popUp_Audio.js"></script>
	<title> Audiovisuel - DEBUT Loïc </title>
</head>
<body>

<?php
	include("templates/loading/load.php");
	include("templates/header/head.php");
?>

<section id="body-content">
	<article id="titreArticle">
		<h1>AUDIOVISUEL</h1>
	</article>

	<article id="diapo">
		<?php
			$req=$bdd->prepare("SELECT * FROM audiovisuel");
			$req->execute();
			$audiovisuel=$req->fetchAll(PDO::FETCH_ASSOC);
			// echo "<small>";
			// print_r($audiovisuel);
			// echo "</small>";
			if(empty($audiovisuel)) { ?>
				<p class="nothing">Actuellement, il n'y aucune illustration</p>
			<?php }
			else { 
				foreach($audiovisuel as $audio) { ?>
				<div class="audio" style="background-image:url('<?php echo "img/audio/".$audio["miniature"]; ?>')">
					<button class="zoom" data-id="<?php echo $audio["id"]; ?>" >
						<i class="fa-sharp fa-solid fa-play"></i>
					</button>
				</div>
				<?php } 
			}
		?>
	</article>

	<aside id="imgMore">
		<i class="fa-sharp fa-solid fa-xmark"></i>
		<article>
			<h1 class="titre"></h1>
			<div id="imageDesc">
				<iframe></iframe>
				<p id="desc"></p>
			</div>
		</article>
	</aside>
</section>

</body>
</html>