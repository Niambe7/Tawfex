<?php
require_once('autoload.php');
$patient = new Tasks();

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Liste des patients</title>
    <link rel="stylesheet" href="css/voirpatient.css">
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
            <h2 id="titre">Liste des Patients</h2>
            <table class="table table-striped">
                <tr>
                    <th>Identifiant</th>
                    <th>Login</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Sexe</th>
                    <th>AGE</th>
                    <th>E-mail</th>
                    <th>Suppression</th>
                    <th>Modification</th>
                </tr>

                <?php
                foreach ($patient->voirPatient() as $aPatient) {
                    extract($aPatient);
                    echo "<tr  scope=\"row\">
                        <td>$id</td>
                        <td>$login</td>
                        <td>$firstname</td>
                        <td>$lastname</td>
                        <td>$sexe</td>
                        <td>$age</td>
                        <td>$email</td>
                        <td><button type=\"button\" class=\"btn btn-danger\"><a  class=\"boutton\" href='secretaire/deletePatient.php?id=$id'
                        onclick=\"return confirm('Voulez vous supprimer $firstname $lastname ?')\">Supprimer</a></button></td>
                        <td><button type=\"button\" class=\"btn btn-info\"><a class=\"boutton\" href='filePatient.php?id=$id'>modifier</a></button></td>
                    </tr>";
                }
                ?>

            </table>
        </div>
        <div id="piedpage"></div>
    </div>
</body>

</html>