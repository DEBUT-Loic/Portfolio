<?php
include("../Start_BDD.php");

$r=$bdd->prepare("SELECT * FROM infographie WHERE id=?");
$r->execute(array($_GET['id']));
$infographie=$r->fetch(PDO::FETCH_ASSOC);

echo json_encode($infographie);
?>