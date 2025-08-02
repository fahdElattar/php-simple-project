<?php
    require_once('User.php');
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: login.php");
        exit();
    }
    $user = User::getUser($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <h2>Welcome <?php echo $user->login; ?></h2>
    <p>Your password is : <?= $user->mdp; ?></p>
    <a href="deconnexion.php">deconnexion</a>
</body>
</html>