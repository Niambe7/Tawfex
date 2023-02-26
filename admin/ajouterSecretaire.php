<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ajouter Secretaire</title>
    <link rel="stylesheet" href="../css/filePatient.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="principal">
        <div id="entete">
            <h1 class="nameapp">TAWFEX <img src="../img/tawfekh.png" alt=""></h1>
        </div>
        <div id="menu">
            <?php
            include "navigation.php"
            ?>
        </div>
        <div id="contenu">
            <form action="actionAddSecretaire.php" method="post" class="formz">
                <h2>Ajout de Secretaire </h2>

                <div class="field">
                    <label>Prenom</label>
                    <input type="text" name="prenom" required>
                </div>


                <div class="field">
                    <label>NOM</label>
                    <input type="text" name="nom" required>
                </div>



                <div class="field">
                    <label>E-mail</label>
                    <input type="email" name="email" required>
                </div>


                <div class="field">
                    <label>Login</label>
                    <input type="text" name="login" required>
                </div>


                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>


                <div id="bouton">
                    <input type="submit" value="Ajouter">
                </div>
            </form>
        </div>
        <div id="piedpage"></div>
    </div>
</body>

</html>