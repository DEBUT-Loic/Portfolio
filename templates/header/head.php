<header id="pc">
	<a href="index.html" class="logo">
		<img src="img/Logo_B.svg" alt="DEBUT Loïc"/>
	</a>

	<nav>
		<ul>
			<a href="index.php" class="menu"><li>Accueil</li></a>
			<a href="propos.php" class="propos"><li>À Propos</li></a>
			<div id="navGalerie">
				<li class="galerie">Galerie</li>
				<div id="panneauGalerie">
					<a href="infographie.php" class="info"><li>Infographie</li></a>
					<a href="audiovisuel.php" class="audiovisuel"><li>Audiovisuel</li></a>
					<a href="sites-internet.php" class="siteWeb"><li>Sites Web</li></a>
				</div>
			</div>
			<a href="contact.php" class="contact"><li>Contact</li></a>
		</ul>
	</nav>

	<div>
		<p>Copyright © 2023</p>
		<?php include("img/Logo_Slim_J.svg"); ?>
	</div>
</header>

<header id="mobile">
	<article>
		<a href="index.html" class="logo">
			<img src="img/DL_J.svg" alt="DEBUT Loïc"/>
		</a>
		<div id="flipButton">
			<div id="flipButtonInner">
				<button class="flipBtnFront"><img src="img/Burger_Mobile.svg" class="btnMobile"/></button>
				<button class="flipBtnBack"><img src="img/Croix_Menu.svg" class="btnMobile"/></button>
			</div>
		</div>
	</article>
</header>