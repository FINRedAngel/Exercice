<?php
    $errors = [];

    if(empty($_POST["tnom"])){
        $errors[] = "le nom est vide";
    }

    if(empty($_POST["tdelai"])){
        $errors[] = "le delai est vide";
    }

    if(empty($_POST["tpays"])){
        $errors[] = "le pays est vide";
    }

    if(empty($_POST["tzone"])){
        $errors[] = "la zone est vide";
    }

    if(count($errors) > 0){
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        return;
    }

    require_once(__DIR__."/pdo.php");

    $pdo->prepare("INSERT INTO transporteur (id_transporteur, tnom, tdelai, tpays, tzone) VALUES(null, ?, ?, ?, ?)")->execute([$_POST["tnom"], $_POST["tdelai"], $_POST["tpays"], $_POST["tzone"]]);

    header("location: ../Index.php");