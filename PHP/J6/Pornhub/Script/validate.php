<?php
    $errors = [];

    if(empty($_POST["nom"])){
        $errors[] = "le nom est vide";
    }
    else if(!ctype_alpha($_POST["nom"])){
        $errors[] = "le nom est incorecte";
    }

    if(empty($_POST["prenom"])){
        $errors[] = "le prenom est vide";
    }
    else if(!ctype_alpha($_POST["prenom"])){
        $errors[] = "le prenom est incorecte";
    }

    if(empty($_POST["email"])){
        $errors[] = "l'email est vide";
    }
    else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
        $errors[] = "l'email est incorecte";
    }

    if(empty($_POST["password"])){
        $errors[] = "le password est vide<br>";
    }
    else if(ctype_digit($_POST["password"]) || ctype_alpha($_POST["password"])){
        $errors[] = "le password doit comporter des chiffres et des lettres<br>";
    }

    if(count($errors) > 0){
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        return;
    }

    require_once(__DIR__."/pdo.php");

    $pdo->prepare("INSERT INTO utilisateur (id_user, user_nom, user_prenom, user_email, user_password) VALUES(null, ?, ?, ?, ?)")->execute([$_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["password"]]);

    session_start();
    $_SESSION["id_user"] = uniqid();
    $_SESSION["nom"] = $_POST["nom"];
    $_SESSION["prenom"] = $_POST["prenom"];

    header("location: ../Accueil.php");