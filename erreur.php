<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage d'erreur</title>
    <link href="" rel="stylesheet" type="text/css">
</head>
<body>

<?php
// Récupération de l'erreur via l'URL
$message_erreur = $_GET["erreur"];
echo "<p class='erreur'>$message_erreur</p>";
?>

<a href="index.html">Retour à l'accueil</a>

</body>
</html>