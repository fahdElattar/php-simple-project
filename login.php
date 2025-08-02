<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple project</title>
</head>
<body>
    <h1>Login</h1>
    <form action="connexion.php" method="POST">
        <label for="login">Login : </label>
        <input type="text" placeholder="Login" name="login" autocomplete="off" required>
        <label for="mdp">Mdp : </label>
        <input type="password" placeholder="Mot de passe" name="mdp" autocomplete="off" required>
        <button type="submit">Send</button>
    </form>
</body>
</html>