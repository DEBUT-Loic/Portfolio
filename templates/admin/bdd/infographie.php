<?php
    session_start();
    include("../../Start_BDD.php");

    $tabInsert=array();
    $tabInsert["titre"]=$_POST["titreInfo"];
    $tabInsert["img"]=$_FILES["img"]["name"];
    $nom_tmp=$_FILES['img']['tmp_name'];
    $size_img=getimagesize($nom_tmp);

    if($size_img[0]>=$size_img[1]) {
        $tabInsert["orientation"]="land";
    }
    else {
        $tabInsert["orientation"]="port";
    }

    $tabInsert["description"]=$_POST["descInfo"];

    $tab=array();
    foreach ($tabInsert as $key => $value) {
        array_push($tab,$value);
    }

    print_r($tab);

    $r=$bdd->prepare("INSERT INTO infographie (titre,image,orientation,description) VALUES (?,?,?,?)");
    if($r->execute($tab) && move_uploaded_file($nom_tmp,"../../../img/info/".$_FILES['img']['name'])) {
        $_SESSION["status"]="ok";
    }
    else {
        $_SESSION["status"]="no";
    }

    header("Location: ../index.php");
?>