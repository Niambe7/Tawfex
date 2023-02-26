<?php
//Restriction à la page
/*session_start();
if (!isset($_SESSION['login'])) {
    header("location:index.php");
    exit();
}*/
$id = $_GET['id'];
//Connexion à la BD
require_once('autoload.php');
$patient = new Tasks();
$file = (object) $patient->detailsAppointment($id);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Fiche du Rendez-Vous</title>
    <link rel="stylesheet" href="css/filePatient.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="principal">
        <div id="entete">
            <h1 class="nameapp">TAWFEX <img src="img/tawfekh.png" alt=""></h1>
        </div>
        <div id="menu">
            <?php
            include "navigation.php";
            ?>
        </div>
        <div id="contenu">
            <form action="secretaire/editAppointment.php" method="post" class="formz">
                <h2>Fiche du Rendez-Vous</h2>

                <div class="field">
                    <label>Login</label>
                    <input name="id" type="hidden" value="<?php echo $file->id ?>">
                </div>


                <div class="field">
                    <label>Date</label>
                    <input type="date" name="date" value="<?php echo $file->dateR ?>">
                </div>


                <div class="field">
                    <label>Heure</label>
                    <select name="heure">
                        <option value="">Fixer</option>
                        <option value="9H-00">9H-00</option>
                        <option value="10H-00">10H-00</option>
                        <option value="11H-00">11H-00</option>
                        <option value="12H-00">12H-00</option>
                        <option value="15H-30">15H-30</option>
                        <option value="16H-30">16H-30</option>
                        <option value="17H-30">17H-30</option>
                        <option value="18H-30">18H-30</option>

                    </select>
                </div>


                <div class="field">
                    <label>Condition</label>
                    <select name="condition">
                        <option value="">Selectionnez</option>
                        <option value="A Jeun">A Jeun</option>
                        <option value="aucune">aucune</option>

                    </select>
                </div>


                <div id="bouton">
                    <input type="submit" value="Fixer">
                </div>
            </form>
        </div>
        <div id="piedpage"></div>
    </div>
</body>

</html>