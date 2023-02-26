<?php
session_start();
require_once('autoload.php');
$patient = new Tasks();

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Validation Rendez-Vous</title>
    <link rel="stylesheet" href="css/Voirpatient.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <div id="entete">
        <h1 class="nameapp">TAWFEX <img src="img/tawfekh.png" alt=""></h1>

    </div>
</head>

<body>
    <div>

        <div>
            <?php
            include "navigation.php";
            ?>
        </div>
        <div id="contenu">
            <h2 id="titre">Liste des Rendez-Vous</h2>
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
                    <th>Validation</th>
                    <th> Envoyer Notification</th>
                </tr>

                <?php
                foreach ($patient->afficherRendezVous() as $aPatient) {
                    extract($aPatient);

                    $couleur;
                    $valider = "validé";
                    $enCours = "en cours";
                    if ($status == $valider) {
                        $couleur = "green";
                    } else
                    if ($status == $enCours) {
                        $couleur = "red";
                    }

                    $_SESSION['email'] = $email;
                    echo "<tr  scope=\"row\">
                        <td>$id</td>
                        <td>$login</td>
                        <td>$email</td>
                        <td>$dateR</td>
                        <td>$heure</td>
                        <td>$service</td>
                        <td>$conditions</td>
                        <td style=\"color: $couleur;\">$status</td>
                        <td><button type=\"button\" class=\"btn btn-success\"><a  class=\"boutton\" href='secretaire/validerRendezVous.php?id=$id'
                        onclick=\"return confirm('Voulez vous Valider le Rendez-Vous de  $login ?')\">Valider</a></button></td>
                        <td><button type=\"button\" class=\"btn btn-primary\"><a  class=\"boutton\" href='secretaire/notifier.php?id=$id'
                        onclick=\"return confirm('Evoyer une notification par E-mail à $login ?')\">notifier</a></button></td>
                    </tr>";
                }
                ?>

            </table>
        </div>
        <div id="piedpage"></div>
    </div>
</body>

</html>