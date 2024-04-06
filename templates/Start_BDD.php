<?php
try {
	$bdd=new PDO("mysql:host=localhost;dbname=portfolio;charset=utf8","root","");
}
catch (Exception $e){
	die("Erreur de connection à la bdd !".$e->getMessage());
}
?>