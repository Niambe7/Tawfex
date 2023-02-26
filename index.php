
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/accueil.css">
</head>

<body>

    <div class="background-image">
        <form action="secretaire/login.php" method="POST" class="box">
            <h1>Login</h1>
            <input type="text" placeholder="Username" name="login">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" value="envoyer">
        </form>
    </div>


</body>

</html>