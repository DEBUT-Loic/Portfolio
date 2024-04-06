<?php
try {
	$bdd=new PDO("mysql:host=debutlijebe.mysql.db;dbname=debutlijebe;charset=utf8","debutlijebe","bddDebloi12");
}
catch (Exception $e){
	die("Erreur de connection à la bdd !".$e->getMessage());
}
?>