<?php
    $errors = [];

    if(empty($_POST["Nom"])){
        $errors[] = "le nom est vide";
    }
    
        $nom_du_fichier = $_FILES["CV_joint"]["name"];
        $type_du_fichier = $_FILES["CV_joint"]["type"];
        $dossier_temporaire = $_FILES["CV_joint"]["tmp_name"];
        $size_du_fichier = $_FILES["CV_joint"]["size"];
        $dossier_uploads = "../Uploader/". $nom_du_fichier;
        $extension_du_fichier = strrchr($nom_du_fichier, ".");
        $extensions_autorisees = array(".pdf", ".PDF");

    if(!empty($nom_du_fichier)){
        if(!in_array($extension_du_fichier, $extensions_autorisees)){
            $errors[] = "Error: pas la bonne extension";
        }
        else if($size_du_fichier > 7000000){
            $errors[] = "Error: Trop lourd";
        }
    }
    else{
        $errors[] = "Pas de fichier uploader";
    }

    if(count($errors) > 0)){
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        return;
    }

    if(move_uploaded_file($dossier_temporaire,$dossier_uploads)){
        echo "Fichier correctement envoyer!";
    }

    require_once(__DIR__."/pdo.php");

    $pdo->prepare("INSERT INTO cv (id_cv, cv_nom, cv_link) VALUES(null, ?, ?)")->execute([$_POST["Nom"], $dossier_uploads]);

    header("Location: ../CV.php");