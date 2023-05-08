<?php
session_start();

require_once(__DIR__."/pdo.php");

$requete = $pdo->query("SELECT * FROM utilisateur");
$User = $requete->fetch(PDO::FETCH_ASSOC);

if(empty($User)){
    header("location: ../Contact.php");
    return;
}

$_SESSION["id_user"] = $User['id_user'];
$_SESSION["nom"] = $User['user_nom'];
$_SESSION["prenom"] = $User['user_prenom'];
$_SESSION["email"] = $User['user_email'];
$_SESSION["password"] = $User['user_password'];

header("location: ../CV.php");