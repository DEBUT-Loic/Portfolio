<?php
session_start();

if(!isset($_SESSION["admin"])) {
    header("Location: form.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://debut-loic.fr/img/icon.png">
    <link rel="stylesheet" href="../../css/font.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Panel Admin - Portfolio</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("button").click(function() {
                $("article form").slideUp();
                $(this).siblings().slideDown().css("display","flex");

                $("button").removeClass("focus");
                $(this).addClass("focus");
            })

            $(document).keyup(function(e) {
                console.log(e.key)
                if(e.key=="Escape") {
                    $("article form").slideUp();
                    $("button").removeClass("focus");
                }
            })
        })
    </script>
</head>
<body>
    <section id="panel">
        <a class="menu" href="../../index.php"><button>Retour au menu</button></a>
        <?php
        if(isset($_SESSION["status"])) {
            if($_SESSION["status"]=="ok") {
                ?>
                <div id="success">
                    <p>Les données ont bien été sauvegardés</p>
                </div>
                <?php
            }
            else {
                ?>
                <div id="erreur">
                    <p>Il y a une erreur lors de la sauvegarde des données</p>
                </div>
                <?php
            }
        }
        ?>

        <article>
            <button>Audiovisuel</button>
            <form id="audio" enctype='multipart/form-data' action="bdd/audiovisuel.php" method="post">
                <label for="titreAudio">Titre</label>
                <input type="text" name="titreAudio" id="titreAudio">

                <label for="video">URL de la vidéo</label>
                <input type="url" name="video" id="video">

                <label for="miniature">Miniature</label>
                <input type="file" name="miniature" id="miniature">

                <label for="descAudio">Description</label>
                <textarea name="descAudio" id="descAudio" cols="100" rows="15"></textarea>

                <input type="submit" form="audio">
            </form>
        </article>
        <article>
            <button>Infographie</button>
            <form id="info" enctype='multipart/form-data' action="bdd/infographie.php" method="post">
                <label for="titreInfo">Titre</label>
                <input type="text" name="titreInfo" id="titreInfo">

                <label for="img">Image</label>
                <input type="file" name="img" id="img">

                <label for="descInfo">Description</label>
                <textarea name="descInfo" id="descInfo" cols="100" rows="15"></textarea>

                <input type="submit" form="info">
            </form>
        </article>
        
        <article>
            <button>Sites Internet</button>
            <form id="sites" enctype='multipart/form-data' action="bdd/sites.php" method="post">
                <label for="titreSites">Titre</label>
                <input type="text" name="titreSites" id="titreSites">

                <label for="icon">Image</label>
                <input type="file" name="icon" id="icon">

                <label for="folder">Dossier du site</label>
                <input type="file" id="folder" name="folder"/>

                <label for="descSites">Description</label>
                <textarea name="descSites" id="descSites" cols="100" rows="15"></textarea>

                <input type="submit" form="sites">
            </form>
        </article>
    </section>
</body>
</html>
<?php unset($_SESSION["status"]); ?>