<?php
    $errors = [];

    if(empty($_POST["aadresse1"])){
        $errors[] = "le aadresse1 est vide";
    }

    if(empty($_POST["aadresse2"])){
        $errors[] = "la description est vide";
    }

    if(empty($_POST["acode_postal"])){
        $errors[] = "le code postal est vide";
    }

    if(empty($_POST["aville"])){
        $errors[] = "la ville est vide";
    }

    if(count($errors) > 0){
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        return;
    }

    require_once(__DIR__."/pdo.php");

    $pdo->prepare("INSERT INTO adresse (id_adresse, aadresse1, aadresse2, acode_postal, aville) VALUES(null, ?, ?, ?, ?)")->execute([$_POST["aadresse1"], $_POST["aadresse2"], $_POST["acode_postal"], $_POST["aville"]]);

    header("location: ../Index.php");