<?php
include("../Start_BDD.php");

$r=$bdd->prepare("SELECT * FROM audiovisuel WHERE id=?");
$r->execute(array($_GET['id']));
$audiovisuel=$r->fetch(PDO::FETCH_ASSOC);

echo json_encode($audiovisuel);
?>