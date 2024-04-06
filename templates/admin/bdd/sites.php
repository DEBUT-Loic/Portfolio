<?php
    session_start();
    include("../../Start_BDD.php");

    $tabInsert=array();

    $tabInsert["titre"]=$_POST["titreSites"];
    $tabInsert["image"]=$_FILES["icon"]["name"];
    $tabInsert["description"]=$_POST["descSites"];

    $nom_tmpImg=$_FILES['icon']['tmp_name'];
    $nom_tmpDir=$_FILES['folder']['tmp_name'];

    // Nom du zip sans extension
    $nameZip=str_replace(".zip",'',$_FILES["folder"]["name"]);

    // Répertoire d'extraction
    $pathWeb="../../WEB/";

    $tab=array();
    foreach ($tabInsert as $key => $value) {
        array_push($tab,$value);
    }

    $r=$bdd->prepare("INSERT INTO sitesinternet (titre,image,description) VALUES (?,?,?)");
    if($r->execute($tab) && move_uploaded_file($nom_tmpImg,"../../../img/web/".$_FILES['icon']['name'])) {
        $zip=new ZipArchive;
        if($zip->open($nom_tmpDir) === true) {
            $zip->extractTo($pathWeb);
            $zip->close();
            // Renommer le dossier avec le titre du site
            rename($pathWeb.$nameZip, $pathWeb.$tabInsert["titre"]);
            $_SESSION["status"]="ok";
        }
        else {
            $_SESSION["status"]="no";
        }
    }
    else {
        $_SESSION["status"]="no";
    }

    header("Location: ../index.php");
?>