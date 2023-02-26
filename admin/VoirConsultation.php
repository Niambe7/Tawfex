<?php
require_once('../autoload.php');
$patient = new Tasks();

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Liste des Consultations</title>
    <link rel="stylesheet" href="../css/voirpatient.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div>
        <div id="entete">
            <h1 class="nameapp">TAWFEX <img src="../img/tawfekh.png" alt=""></h1>
        </div>
        <div>
            <?php
            include "navigation.php";
            ?>
        </div>
        <div id="contenu">
            <h2 id="titre">Liste des Consultation</h2>
            <table class="table table-striped">
                <tr>
                    <th>Login</th>
                    <th>Date</th>
                    <th>Diagnostic Principal</th>
                    <th>Diagnostic Associé</th>
                    <th>Examen</th>
                    <th>Infos Médical</th>
                    <th>Résumé</th>
                    <th>Conduite à Tenir</th>
                    <th>Medecin</th>
                    <th>Service</th>
                </tr>

                <?php
                foreach ($patient->voirConsultation() as $aPatient) {
                    extract($aPatient);
                    echo "<tr  scope=\"row\">
                        <td>$login</td>
                        <td>$dateC</td>
                        <td>$diagnosticprincipal</td>
                        <td>$diagnosticassocie</td>
                        <td>$examenafaire</td>
                        <td>$infomedical</td>
                        <td>$resume</td>
                        <td>$conduiteatenir</td>
                        <td>$medecin</td>
                        <td>$services</td>
                    </tr>";
                }
                ?>

            </table>
        </div>
        <div id=""></div>
    </div>
</body>

</html>