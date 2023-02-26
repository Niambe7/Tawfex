<?php
require_once('../autoload.php');
//Récupération des données provenant du formulaire
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$age = $_POST['age'];
$login = $_POST['login'];
$password=$_POST['password'];

$patient=new Tasks();
$lastID=$patient->addPatient($firstname, $lastname, $sexe, $age, $email, $login, $password);

//Redirection
if($lastID){
    header("location:../VoirPatient.php");
    exit();
}else{
    echo"Une erreur s'est produite lors de l'insertion! ";
}
