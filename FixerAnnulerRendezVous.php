<?php
require_once('autoload.php');
$patient = new Tasks();

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Liste des Rendez-Vous</title>
    <link rel="stylesheet" href="css/fixerAnnulerRendezVous.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div>
        <div id="entete">
            <h1 class="nameapp">TAWFEX <img src="img/tawfekh.png" alt=""></h1>
        </div>
        <div>
            <?php
            include "navigation.php";
            ?>
        </div>
        <div id="contenu">
            <h2 id="titre">Fixer ou Annuler Rendez-Vous</h2>
            <table class="table table-striped">
                <tr>
                    <th>Id Rendez-Vous</th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Service</th>
                    <th>Condition</th>
                    <th>Statut</th>
                    <th>Annuler</th>
                    <th>Fixer</th>
                </tr>

                <?php
                foreach ($patient->afficherRendezVous() as $aPatient) {
                    extract($aPatient);
                    echo "<tr  scope=\"row\">
                        <td>$id</td>
                        <td>$login</td>
                        <td>$email</td>
                        <td>$dateR</td>
                        <td>$heure</td>
                        <td>$service</td>
                        <td>$conditions</td>
                        <td>$status</td>
                        <td><button type=\"button\" class=\"btn btn-danger\"><a  class=\"boutton\" href='secretaire/deleteAppointement.php?id=$id'
                        onclick=\"return confirm('Voulez vous supprimer $login ?')\">annuler</a></button></td>
                        <td><button type=\"button\" class=\"btn btn-success\"><a class=\"boutton\" href='fileAppointment.php?id=$id'>fixer</a></button></td>
                    </tr>";
                }
                ?>

            </table>
        </div>
        <div id="piedpage"></div>
    </div>
</body>

</html>