<?php
// page de controle de saisie, et appel de fonction d'insertion dans la base
// recuperation des variables du formulaire par le tableau associatif $_POST

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$datedenaissance=$_POST["datedenaissance"];
$nomdututeur=$_POST["nomdututeur"];
$prenomdututeur=$_POST["prenomdututeur"];
$numteldututeur=$_POST["numteldututeur"];

// Vérification des champs nom et prenom (si il ne sont pas vides ?)
//if( empty($nom) || empty($prenom) || empty($datedenaissance) || empty($nomdututeur)|| empty($prenomdututeur) || empty($numteldututeur) || empty($email)) 

if( empty($nom)|| empty($prenom) || empty($email) || empty($datedenaissance)|| empty($nomdututeur) || empty($prenomdututeur)|| empty($numteldututeur)) 
{ 
	$message_erreur="ATTENTION : Un champ n'a pas été rempli correctement ou l'age de naissance n'est pas valable , veuillez vérifier";
	header("Location:erreur.php?erreur=$message_erreur");// redirection vers la page vue erreur
	exit(); // interruption après redirection 
}
else // $nom et $prenom sont corrects  
{
	include 'function.php'; // fichier externe contenant les fonctions d'accès à la base de données
	
	$nb_lignes=insert_utilisateur($nom,$prenom,$datedenaissance,$nomdututeur,$prenomdututeur,$email,$numteldututeur); // appel de fonction d'insertion (couche Modele)

	header("Location:confirmation.php?nb=$nb_lignes"); // page de confirmation

	
} // fin si


?>