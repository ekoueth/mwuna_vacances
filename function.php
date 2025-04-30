<?php
function insert_utilisateur($nom, $prenom, $datedenaissance, $nomdututeur, $prenomdututeur, $email, $numteldututeur)
{
    include 'param_connex.php'; // Connexion à la base de données
    $nb_lignes = 0; // Initialisation du nombre de lignes insérées
    
    // Requête d'insertion dans la base
    $requete = " INSERT INTO utilisateur (nom, prenom, datedenaissance, nomdututeur, prenomdututeur, email, numteldututeur) 
                VALUES ('$nom', '$prenom', '$datedenaissance', '$nomdututeur', '$prenomdututeur', '$email', '$numteldututeur')";
    
    $reponse_serveur = mysqli_query($lien_base, $requete);
    if ($reponse_serveur == false) {
        $message_erreur = "Impossible d'exécuter la requête: $requete " . mysqli_error($lien_base);
        header("Location:erreur.php erreur=$message_erreur"); // Redirection vers la page d'erreur
        exit(); // Arrêt du script après la redirection
    } else {
        $nb_lignes = mysqli_affected_rows($lien_base); // Récupération du nombre de lignes insérées
    }
    return $nb_lignes; // Retourne le nombre de lignes insérées
}
?>