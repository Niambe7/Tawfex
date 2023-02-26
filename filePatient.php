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
$file = (object) $patient->details($id);
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
            <form action="secretaire/editPatient.php" method="post" class="formz">
                <h2>Fiche du patient</h2>

                <div class="field">
                    <label>Login</label>
                    <input name="id" type="hidden" value="<?php echo $file->id ?>">
                    <input type="text" name="login" value="<?php echo $file->login ?>">
                </div>


                <div class="field">
                    <label>Prenom</label>
                    <input type="text" name="prenom" value="<?php echo $file->firstname ?>">
                </div>


                <div class="field">
                    <label>Nom</label>
                    <input type="text" name="nom" value="<?php echo $file->lastname ?>">
                </div>


                <div class="field">
                    <label>Sexe</label>
                    <input type="radio" name="sexe" value="F" <?php if ($file->sexe == "F") echo "checked"; ?>>F
                    <input type="radio" name="sexe" value="M" <?php if ($file->sexe == "M") echo "checked"; ?>>M
                </div>


                <div class="field">
                    <label>AGE</label>
                    <input type="number" name="age" value="<?php echo $file->age ?>">
                </div>



                <div class="field">
                    <label>E-mail</label>
                    <input type="text" name="email" value="<?php echo $file->email ?>">
                </div>


                <div id="bouton">
                    <input type="submit" value="Modifier">
                </div>
            </form>
        </div>
        <div id="piedpage"></div>
    </div>
</body>

</html>