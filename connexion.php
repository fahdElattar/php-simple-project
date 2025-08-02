<?php
require_once("User.php");

extract($_POST);

if(!isset($_POST['login']) || !isset($_POST['mdp'])){
    session_start();
    $_SESSION['error'] = "Les données sont incomplètes";
    header("location: index.php");
    exit;
}

$user = User::authentification($login, $mdp);

if(!is_null($user)){
    session_start();
    $_SESSION["id"] = $user->id;
    header('location: index.php');
} else {
    session_start();
    $_SESSION["error"] = "Cet utilisateur n'existe pas!!!";
    header('location: index.php');
    exit;
}

?>