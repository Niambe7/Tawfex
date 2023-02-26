<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ajouter Patient</title>
    <link rel="stylesheet" href="css/filePatient.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="principal">
        <div id="entete">
            <h1 class="nameapp">TAWFEX <img src="img/logo.png" alt=""></h1>
        </div>
        <div id="menu">
            <?php
            include "navigation.php"
            ?>
        </div>
        <div id="contenu">
            <form action="secretaire/addPatient.php" method="post" class="formz">
                <h2>Ajout de Patient </h2>
                <div class="field">
                    <label>Prénoms</label>
                    <input type="text" name="firstname" required>
                </div>


                <div class="field">
                    <label>NOM</label>
                    <input type="text" name="lastname" required>
                </div>


                <div class="field">
                    <label>Sexe</label>
                    <input type="radio" name="sexe" value="F">F
                    <input type="radio" name="sexe" value="M">M
                </div>


                <div class="field">
                    <label>E-mail</label>
                    <input type="text" name="email" required>
                </div>


                <div class="field">
                    <label>AGE</label>
                    <input type="number" name="age" required>
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
                    <input type="submit" value="s'inscrire">
                </div>
            </form>
        </div>
        <div id="piedpage"></div>
    </div>
</body>

</html>