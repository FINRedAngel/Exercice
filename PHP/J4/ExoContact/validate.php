<?php
    $Main = file_get_contents('Contact.php');
    echo "$Main";

    $ERR = 0;
    $errors = [];

    if(empty($_POST["sujet"])){
        $errors[] = "le sujet est vide";
        $ERR = 1;
    }
    else if(!ctype_alpha($_POST["sujet"])){
        $errors[] = "le sujet est incorecte";
        $ERR = 1;
    }

    if(empty($_POST["email"])){
        $errors[] = "l'email est vide";
        $ERR = 1;
    }
    else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
        $errors[] = "l'email est incorecte";
        $ERR = 1;
    }
    
        $nom_du_fichier = $_FILES["piece_jointe"]["name"];
        $type_du_fichier = $_FILES["piece_jointe"]["type"];
        $dossier_temporaire = $_FILES["piece_jointe"]["tmp_name"];
        $size_du_fichier = $_FILES["piece_jointe"]["size"];
        $dossier_uploads = "fichiers/". $nom_du_fichier;
        $extension_du_fichier = strrchr($nom_du_fichier, ".");
        $extensions_autorisees = array(".png", ".PNG", ".jpg", ".JPG", ".txt", ".TXT");

    if(!empty($nom_du_fichier)){
        if(!in_array($extension_du_fichier, $extensions_autorisees)){
            $errors[] = "Error: pas la bonne extension";
            return;
        }
        else if($size_du_fichier > 200000){
            $errors[] = "Error: Trop lourd";
            return;
        }

        if(move_uploaded_file($dossier_temporaire,$dossier_uploads)){
            $errors[] = "Fichier correctement envoyer!";
        }
    }
    else{
        $errors[] = "Pas de fichier uploader";
    }

    if(empty($_POST["message"])){
        $errors[] = "le message est vide";
        $ERR = 1;
    }

    if($ERR == 1){
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        return;
    }

    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    print_r($_FILES["piece_jointe"]["name"]);
    echo "</pre>";