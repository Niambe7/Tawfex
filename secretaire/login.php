<?php
//Démarrage ou relance de la session
session_start();
//Connexion à la BD
require_once('../autoload.php');
//Récupération des données provenant du formulaire
$login=$_POST['login'];
//$_SESSION['username']= $username;
//$role = $_SESSION['role'];
$mdp=$_POST['password'];

$user=new Tasks();


if($user->sign_in($login,$mdp)){
    //initialisation d'une variable session
    $_SESSION['login']=$login;
    header("location:../VoirPatient.php");
    exit();
}


else
    if($login=="admin" && $mdp=="admin")
{
    header("location:../admin/VoirConsultation.php");
    
}

else{
    header("location:../index.php");
}
