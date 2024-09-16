<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/session.css">
</head>
<body>
    <nav>
        <ul>
            <a href="connexion.php"><li>connexion</li></a>
            <a href="session.php"><li>session</li></a>
        </ul>
    </nav>
    <p>Vous êtes connecté à la session</p>
    <?php
    session_start();
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    echo "Nom d'utilisateur: " . $username . "<br>";
    echo "Mot de passe: " . $password;
    ?>
</body>
</html>