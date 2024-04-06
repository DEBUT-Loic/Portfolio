<?php
session_start();
echo header('Status: 200 OK');
	if(isset($_SESSION["Back"])) {
		$lien=$_SESSION["Back"];
	}
	else {
		$lien="/index.php";
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://debut-loic.fr/css/font.css">
    <link rel="stylesheet" type="text/css" href="https://debut-loic.fr/css/style.css">
	<title> ERREUR </title>
	<style>
		@keyframes warning {
			from {
				background: var(--jaune);
			}
            50% {
                background: black;
            }
			to {
				background: var(--jaune);
			}
		}
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body {
			width: 100vw;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			animation: warning 2s linear infinite;
		}
		section {
			width: clamp(500px,26%,960px);
			height: 27%;
			background: #03224c;
			display: flex;
			flex-direction: column;
			justify-content: space-evenly;
			align-items: center;
		}
		h1 {
			font-size: 2.5rem;
			font-family: "Agency_Black";
			color: white;
		}
		a {
			color: white;
			font-family: "Agency_Normal";
			font-size: 2rem;
			text-decoration: none;
			background: black;
			padding: 15px;
			transition: background 0.5s, color 0.5s;
		}
		a:hover {
			background: white;
			color: black;
		}

		@media all and (max-width: 768px) {
			section {
				height: 40%;
				width: 75%;
			}
			h1 {
				font-size: 1.5rem;
			}
			a {
				font-size: 1rem;
			}
		}
	</style>
</head>
<body>

<section>
	<h1>Erreur <?= $_GET["e"]; ?></h1>
	<a href="<?php echo $lien; ?>">REVENIR EN ARRIÈRE</a>
</section>

</body>
</html>