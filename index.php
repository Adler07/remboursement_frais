<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>
    <div class="container -flex align-items-center justify-content-center vh-100">
        <div class="col-nd-4">
            <h2 class="text-center">Connexion</h2>
            <form action="login.php" method="post">
                <div>
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required/>
                </div>
                <div class="mb-3">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required/>
                </div>
                <button type="submit" classe="btn btn-primary w-100">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>