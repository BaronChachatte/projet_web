<!-- <?php include 'cookie.php'; ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form class="forminscr" method="post">
        <input type="nom" name="nom" class="nom" placeholder="Mucrulu">
        <input type="prenom" name="prenom" class="prenom" placeholder="Jusset1">
        <input type="email" name="email" class="email" placeholder="jusset1@monsiteofficiel.com">
        <input type="password" name="mdp" class="mdp" placeholder="Mot de passe">
        <input type="submit" name="formsend" class="formsend" value="OK">
    </form>
    <form class="formlogin" method="post">
        <input type="email" name="lemail" class="lemail" placeholder="jusset1@monsiteofficiel.com">
        <input type="password" name="lmdp" class="lmdp" placeholder="Mot de passe">
        <input type="submit" name="formlogin" class="formlogin" value="OK">
    </form>

    <form class="formapp" method="post">
        <select name="menu_cat" size="1">
        <option value="camera">camera
        <option value="thermostat">thermostat
        <option value="eclairage">eclairage
        <option value="aspirateur">aspirateur
        </select>
        <input type="nom" name="nom_app" class="nom_app" placeholder="nom appareil">
        <input type="submit" name="formapp" class="formapp" value="OK">
    </form>

    <?php
    include 'inscr.php';
    include 'login.php';
    include 'nouv_app.php';
    ?>


</div>
    
</body>
</html>