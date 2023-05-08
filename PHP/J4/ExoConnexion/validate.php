<?php
    $Main = file_get_contents('Connexion.php');
    echo "$Main";

    $ERR = 0;
    $R1 = "";
    $R2 = "";

    if(empty($_POST["email"])){
        $R1 = "l'email est vide<br>";
        $ERR = 1;
    }
    else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
        $R1 = "l'email est incorecte<br>";
        $ERR = 1;
    }

    if(empty($_POST["password"])){
        $R2 = "le password est vide<br>";
        $ERR = 1;
    }
    else if(ctype_digit($_POST["password"]) || ctype_alpha($_POST["password"])){
        $R2 = "le password doit comporter des chiffres et des lettres<br>";
        $ERR = 1;
    }

    if($ERR == 1){
        echo "$R1 $R2";
        return;
    }

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";