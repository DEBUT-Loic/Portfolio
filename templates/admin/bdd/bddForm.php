<?php
session_start();
include("../../Start_BDD.php");

$user=htmlentities($_POST["user"]);
$mdp=crypt(htmlentities($_POST["mdp"]),"kerjean");

$r=$bdd->prepare("SELECT password FROM admin_id where user=?");
$r->execute(array($user));
$result=$r->fetch(PDO::FETCH_ASSOC);

if($result["password"]==$mdp) {
    $_SESSION["admin"]="true";
    header("Location: https://debut-loic.fr/templates/admin/index.php");
}
else {
    $_SESSION["fauxAdmin"]="true";
    header("Location: https://debut-loic.fr/templates/admin/form.php");
}
?>