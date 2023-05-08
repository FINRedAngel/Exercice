<?php
    $errors = [];

    if(empty($_POST["pnom"])){
        $errors[] = "le nom est vide";
    }
    else if(!ctype_alpha($_POST["pnom"])){
        $errors[] = "le nom est incorecte";
    }

    if(empty($_POST["pdescription"])){
        $errors[] = "la description est vide";
    }

    if(empty($_POST["pprix"])){
        $errors[] = "le prix est vide";
    }

    if(empty($_POST["ptva"])){
        $errors[] = "la TVA est vide";
    }

    if(count($errors) > 0){
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        return;
    }

    require_once(__DIR__."/pdo.php");

    $pdo->prepare("INSERT INTO produit (id_produit, pnom, pdescription, pprix, ptva) VALUES(null, ?, ?, ?, ?)")->execute([$_POST["pnom"], $_POST["pdescription"], $_POST["pprix"], $_POST["ptva"]]);

    header("location: ../Index.php");