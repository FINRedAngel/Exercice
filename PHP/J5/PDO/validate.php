<?php
    $ERR = 0;
    $errors = [];

    if(empty($_POST["adresse1"])){
        $errors[] = "l'adresse 1 est vide";
        $ERR = 1;
    }

    if(empty($_POST["code_postal"])){
        $errors[] = "le code_postal est vide";
        $ERR = 1;
    }
   
    if(empty($_POST["ville"])){
        $errors[] = "la ville est vide";
        $ERR = 1;
    }
    
    if($ERR == 1){
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        return;
    }

    require_once(__DIR__."/pdo.php");

    $pdo->prepare("INSERT INTO adresse (id_adresse, adresse1, adresse2, code_postal, ville) VALUES(null, ?, ?, ?, ?)")->execute([$_POST["adresse1"], $_POST["adresse2"], $_POST["code_postal"], $_POST["ville"]]);

    header("location:index.php");