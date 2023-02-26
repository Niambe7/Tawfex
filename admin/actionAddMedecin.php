<?php
require_once('../autoload.php');
//Récupération des données provenant du formulaire
$codemedecin = $_POST['codeMedecin'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$password = $_POST['password'];
$service = $_POST['service'];

$medecin = new Tasks();
$lastID = $medecin->addMedecin($codemedecin, $prenom, $nom, $password, $service);

//Redirection
if ($lastID) {
    header("location:succesAddingUser.php");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'insertion! ";
}