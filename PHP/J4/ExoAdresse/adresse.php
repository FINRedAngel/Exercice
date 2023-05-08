<?php
    $ERR = 0;
    $R1 = "";
    $R2 = "";
    $R3 = "";
    $R4 = "";

    if(empty($_POST["adresse1"])){
        $R1 = "le Adresse1 est vide<br>";
        $ERR = 1;
    }

    if(empty($_POST["adresse2"])){
        $R2 = "le Adresse2 est vide<br>";
        $ERR = 1;
    }

    if(!ctype_alpha($_POST["code_postal"])){
        $R3 = "le code_postal est vide<br>";
        $ERR = 1;
    }

    if(empty($_POST["ville"])){
        $R4 = "la ville est vide<br>";
        $ERR = 1;
    }


    if($ERR == 1){
        echo "$R1 $R2 $R3 $R4";
        return;
    }

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";