<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/connexion.css">
</head>
<body>
    <nav>
        <ul class=menus>
            <li><img src="" alt="Logo du groupe GSB"></li>
            <a href="connexion.php"><li>Connexion</li></a>
            <a href="session.php"><li>Session</li></a>
        </ul>
    </nav>
    <div class=form_background>
        <img src="" alt="Logo du groupe GSB" width="200px" height=auto>
        <form action="connexion.php" method="post">
            <label class="space">Nom d'utilisateur</label>
            <input type="text" name="nom"/>
            <label class="space">Mot de passe</label>
            <input type="password" name="mdp"/>
            <input type="submit" class="button" name="connexion" value="Se connecter"/>
        </form>
    </div>
<?php
    if (isset($_POST["connexion"])){
    $name = $_POST["nom"];
    $passwd = $_POST["mdp"];
    if ($name != null && $passwd != null){
        session_start();
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $passwd;
        header("Location: session.php");
        echo "Nom d'utilisateur = {$name}<br> 
              Mot de passe = {$passwd}";
            } else {
                echo "Identifiants manquants. Veuillez rentrer des identifiants valides.";
            }
        }
?>
</body>
</html>