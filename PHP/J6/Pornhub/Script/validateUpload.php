<?php
    $errors = [];

    if(empty($_POST["sujet"])){
        $errors[] = "le sujet est vide";
    }
    
        $nom_du_fichier = $_FILES["piece_jointe"]["name"];
        $type_du_fichier = $_FILES["piece_jointe"]["type"];
        $dossier_temporaire = $_FILES["piece_jointe"]["tmp_name"];
        $size_du_fichier = $_FILES["piece_jointe"]["size"];
        $dossier_uploads = "../Uploader/". $nom_du_fichier;
        $extension_du_fichier = strrchr($nom_du_fichier, ".");
        $extensions_autorisees = array(".png", ".PNG", ".jpg", ".JPG", ".jpeg", ".JEPG", ".pdf", ".PDF");

    if(!empty($nom_du_fichier)){
        if(!in_array($extension_du_fichier, $extensions_autorisees)){
            $errors[] = "Error: pas la bonne extension";
        }
        else if($size_du_fichier > 3000000){
            $errors[] = "Error: Trop lourd";
        }
    }
    else{
        $errors[] = "Pas de fichier uploader";
    }

    if(empty($_POST["message"])){
        $errors[] = "le message est vide";
    }

    if(count($errors) > 0){
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        return;
    }

    if(move_uploaded_file($dossier_temporaire,$dossier_uploads)){
        $errors[] = "Fichier correctement envoyer!";
    }

    require_once(__DIR__."/pdo.php");

    $pdo->prepare("INSERT INTO contact (id_contact, sujet, nom_fichier, message) VALUES(null, ?, ?, ?)")->execute([$_POST["sujet"], $nom_du_fichier, $_POST["message"]]);

    header("Location: ../Contact.php");