<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/bootstrap.min.js" defer></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center titre">Se connecter</h2>
        <form action="">
            <div class="mb-3">
                <label for="email" class="form-label soratra">Email :</label>
                <input type="email" class="form-control" id="email" placeholder="votre email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label soratra">Mot de passe :</label>
                <input type="password" class="form-control" id="password" placeholder="votre mot de passe">
            </div>
        </form>
        <div class="text-center">
            <button type="submit" class="btn btn-primary boutton">Connecter</button>
            <a href="connecter.php"class="btn btn-danger boutton">Annuler</a>
        </div>
    </div>
</body>
</html>