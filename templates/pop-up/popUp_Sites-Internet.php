<?php
include("../Start_BDD.php");

$r=$bdd->prepare("SELECT * FROM sitesinternet WHERE id=?");
$r->execute(array($_GET['id']));
$web=$r->fetch(PDO::FETCH_ASSOC);
$web["description"]=nl2br($web["description"]);
echo json_encode($web);
?>