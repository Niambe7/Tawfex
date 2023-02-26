<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
        <a class="navbar-brand" href="#">Tawfex</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="VoirPatient.php">Afficher Liste Patient <span class="sr-only">(current)</span></a>
                <a class="nav-link active" href="FixerAnnulerRendezVous.php">Fixer/Annuler Rendez-Vous</a>
                <a class="nav-link active" href="ValiderRendezVous.php">Valider Rendez-Vous </a>
                <a class="nav-link active" href="AjouterPatient.php">Ajouter Patient </a>
                <a class="nav-link active" href="logout.php">Deconnexion </a>
            </div>
        </div>
    </nav>
</body>

</html>