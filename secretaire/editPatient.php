<?php
//Restriction   la page
/*session_start();
if(!isset($_SESSION['login'])){
    header("location:index.php");
    exit();
}*/

//Récupération des données provenant du formulaire
$login = $_POST['login'];
$firstname=$_POST['prenom'];
$lastname=$_POST['nom'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$age=$_POST['age'];
$id=$_POST['id'];

require_once('../autoload.php');
$patient=new Tasks();
$patient->updatePatient($login, $firstname, $lastname, $sexe, $age, $email, $id);
header("location:../VoirPatient.php");
exit();
