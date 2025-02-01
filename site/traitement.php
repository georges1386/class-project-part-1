<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les résultats du vote</title>
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>
    <div class="resultats">
        <p><?php
            if(isset($_POST["joli"])) {
                if($_POST["joli"] == "oui_passion") {
                    echo "Ah merci beaucoup de m'avoir dit que mon site est joli";
                } else {
                    echo "Le site n'est pas joli ? C'est noté, je vais l'améliorer";
                }
            } else {
                echo "Vous n'avez rien dit à propos de la jolibilité du site";
            }
        ?></p>
        <p><?php
            if(isset($_POST["passion"])) {
                if($_POST["passion"] == "oui_passion") {
                    echo "Vous devrez donc avoir les mêmes centres d'intêrets que moi vu que vous aimez ma passion. Les grands esprits se rencontrent 😎";
                } else {
                    echo "Oh😔, Dommage que ma passion ne vous interesse pas";
                }
            } else {
                echo "Vous n'avez rien dit à propos de ma passion";
            }
        ?></p>
        <p><?php
            if(isset($_POST["commentaire"]) && $_POST["commentaire"] != "") {
                echo "Dans vos commentaires, vous avez dit : " . $_POST["commentaire"];
            } else {
                echo "Dommage que vous n'avez pas mis de commentaires";
            }
        ?></p>
    </div>
    <p><a href="index.html">Retournez à l'acceuil</a></p>
</body>
</html>