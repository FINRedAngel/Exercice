<?php
    $Main = file_get_contents('inscription.php');
    echo "$Main";

    $ERR = 0;
    $R1 = "";
    $R2 = "";
    $R3 = "";
    $R4 = "";

    if(empty($_POST["nom"])){
        $R1 = "le nom est vide<br>";
        $ERR = 1;
    }
    else if(!ctype_alpha($_POST["nom"])){
        $R1 = "le nom est incorecte<br>";
        $ERR = 1;
    }

    if(empty($_POST["prenom"])){
        $R2 = "le prenom est vide<br>";
        $ERR = 1;
    }
    else if(!ctype_alpha($_POST["prenom"])){
        $R1 = "le prenom est incorecte<br>";
        $ERR = 1;
    }

    if(empty($_POST["email"])){
        $R3 = "l'email est vide<br>";
        $ERR = 1;
    }
    else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
        $R3 = "l'email est incorecte<br>";
        $ERR = 1;
    }

    if(empty($_POST["password"])){
        $R4 = "le password est vide<br>";
        $ERR = 1;
    }
    else if(ctype_digit($_POST["password"]) || ctype_alpha($_POST["password"])){
        $R4 = "le password doit comporter des chiffres et des lettres<br>";
        $ERR = 1;
    }

    if($ERR == 1){
        echo "$R1 $R2 $R3 $R4";
        return;
    }
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";