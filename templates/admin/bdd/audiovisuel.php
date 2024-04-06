<?php
    session_start();
    include("../../Start_BDD.php");

    $tabInsert=array();
    $tabInsert["titre"]=$_POST["titreAudio"];
    $tabInsert["video"]=$_POST["video"];
    $tabInsert["miniature"]=$_FILES["miniature"]["name"];
    $tabInsert["description"]=$_POST["descAudio"];

    $nom_tmp=$_FILES['miniature']['tmp_name'];

    $tab=array();
    foreach ($tabInsert as $key => $value) {
        array_push($tab,$value);
    }

    $r=$bdd->prepare("INSERT INTO audiovisuel (titre,video,miniature,description) VALUES (?,?,?,?)");
    if($r->execute($tab) && move_uploaded_file($nom_tmp,"../../../img/audio/".$_FILES['miniature']['name'])) {
        $_SESSION["status"]="ok";
    }
    else {
        $_SESSION["status"]="no";
    }

    header("Location: ../index.php");
?>