<?php
$monserveur = "localhost"; // Adresse du serveur SQL
$monlogin = "root"; // Login de la base de données
$monpass = ""; // Mot de passe de la base de données (vide en local)
$mabase = "moina"; // Nom de la base de données

// Connexion au SGBD
$lien_base = mysqli_connect($monserveur, $monlogin, $monpass, $mabase);
mysqli_set_charset($lien_base, 'utf8');

if (!$lien_base) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}
?>