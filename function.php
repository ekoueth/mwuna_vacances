<?php
function insert_utilisateur($nom, $prenom, $date_de_naissance, $nom_du_tuteur, $prenom_du_tuteur, $adresse_mail, $numero_de_telephone_tuteur) 
{
    include 'param_connex.php';
    if (!isset($lien_base)) {
        throw new Exception("Erreur de connexion à la base de données");
    }
    $nb_lignes = 0; // Initialisation du nombre de lignes insérées
    
    // Prepare and escape input values to prevent SQL injection
    $nom = mysqli_real_escape_string($lien_base, $nom);
    $prenom = mysqli_real_escape_string($lien_base, $prenom);
    $date_de_naissance = mysqli_real_escape_string($lien_base, $date_de_naissance);
    $nomdututeur = mysqli_real_escape_string($lien_base, $nomdututeur);
    $prenomdututeur = mysqli_real_escape_string($lien_base, $prenomdututeur);
    $email = mysqli_real_escape_string($lien_base, $email);
    $numteldututeur = mysqli_real_escape_string($lien_base, $numteldututeur);
    
    // Requête d'insertion dans la base
    $requete = "INSERT INTO utilisateur (nom, prenom, date_de_naissance, nom_du_tuteur, prenom_du_tuteur, adresse_mail, numero_de_telephone_tuteur) 
                VALUES ('$nom', '$prenom', '$date_de_naissance', '$nom_du_tuteur', '$prenom_du_tuteur', '$adresse_mail', '$numero_de_telephone_tuteur')";
    
    $reponse_serveur = mysqli_query($lien_base, $requete);
    if ($reponse_serveur == false) {
        $message_erreur = "Impossible d'exécuter la requête: $requete " . mysqli_error($lien_base);
        header("Location:erreur.php erreur=$message_erreur"); // Redirection vers la page d'erreur
        exit(); // Arrêt du script après la redirection
    } else {
        $nb_lignes = mysqli_affected_rows($lien_base); // Récupération du nombre de lignes insérées
    }
    
    mysqli_close($lien_base); // Close database connection
    return $nb_lignes; // Retourne le nombre de lignes insérées
}
?>
