<?php
require_once('../autoload.php');
//Récupération des données provenant du formulaire
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

$patient = new Tasks();
$lastID = $patient->addSecretary($prenom,$nom, $email, $login, $password);

//Redirection
if ($lastID) {
    header("location:succesAddingUser.php");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'insertion! ";
}
