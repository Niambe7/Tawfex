<?php
//Restriction à la page
/*session_start();
if(!isset($_SESSION['login'])){
    header("location:index.php");
    exit();
}*/
require_once('../autoload.php');
$patient=new Tasks();
$id=$_GET['id'];
$patient->deletePatient($id);
header("location:../VoirPatient.php");
exit();
