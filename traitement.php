<?php
// page de controle de saisie, et appel de fonction d'insertion dans la base
// recuperation des variables du formulaire par le tableau associatif $_POST

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$adresse_mail=$_POST["adresse_mail"];
$datedenaissance=$_POST["date_de_naissance"];
$nom_du_tuteur=$_POST["nom_du_tuteur"];
$prenom_du_tuteur=$_POST["prenom_du_tuteur"];
$numero_de_telephone_tuteur=$_POST["numero_de_telephone_tuteur"];

// Vérification des champs nom et prenom (si il ne sont pas vides ?)
//if( empty($nom) || empty($prenom) || empty($datedenaissance) || empty($nomdututeur)|| empty($prenomdututeur) || empty($numteldututeur) || empty($email)) 

if( empty($nom)|| empty($prenom) || empty($adresse_mail) || empty($date_de_naissance)|| empty($nom_du_tuteur) || empty($prenom_du_tuteur)|| empty($numero_de_telephone_tuteur)) 
{ 
	$message_erreur="ATTENTION : Un champ n'a pas été rempli correctement ou l'age de naissance n'est pas valable , veuillez vérifier";
	header("Location:erreur.php?erreur=$message_erreur");// redirection vers la page vue erreur
	exit(); // interruption après redirection 
}
else // $nom et $prenom sont corrects  
{
	include 'function.php'; // fichier externe contenant les fonctions d'accès à la base de données
	
	$nb_lignes=insert_utilisateur($nom,$prenom,$date_de_naissance,$nom_du_tuteur,$prenom_du_tuteur,$adresse_mail,$numero_de_telephone_tuteur); // appel de fonction d'insertion (couche Modele)

	header("Location:confirmation.php?nb=$nb_lignes"); // page de confirmation

	
} // fin si


?>
