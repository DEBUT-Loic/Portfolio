<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/font.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Formulaire admin</title>
</head>
<body id="formBody">
    <section id="formID">
        <?php
        if(isset($_SESSION["fauxAdmin"])) {
            ?>
            <div id="erreur">
                <p>User ou mot de passe erroné</p>
            </div>
            <?php
        }
        ?>
        <form action="bdd/bddForm.php" method="post">
            <div>
                <label for="user">Identifiant</label>
                <input type="text" name="user" id="user" autofocus>
            </div>

            <div>
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp">
            </div>

            <input type="submit">
        </form>
    </section>
</body>
</html>
<?php
unset($_SESSION["fauxAdmin"]);
?>