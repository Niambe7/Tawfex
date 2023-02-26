<?php
//Restriction   la page
/*session_start();
if(!isset($_SESSION['login'])){
    header("location:index.php");
    exit();
}*/

//Récupération des données provenant du formulaire
$login = $_POST['login'];
$firstname = $_POST['prenom'];
$date = $_POST['date'];
$heure = $_POST['heure'];
$statut = $_POST['statut'];
$condition = $_POST['condition'];
$email = $_POST['email'];
$id = $_POST['id'];

require_once('../autoload.php');
$patient = new Tasks();
$patient->fixerRendezVous($date, $heure, $condition, $id);
header("location:../FixerAnnulerRendezVous.php");
exit();
