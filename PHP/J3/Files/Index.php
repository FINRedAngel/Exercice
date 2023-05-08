<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";

if(!empty($_FILES)){
    $nom_du_fichier = $_FILES["fichier"]["name"];
    $type_du_fichier = $_FILES["fichier"]["type"];
    $dossier_temporaire = $_FILES["fichier"]["tmp_name"];
    $dossier_uploads = "uploads/". $nom_du_fichier;
    $extension_du_fichier = strrchr($nom_du_fichier, ".");
    $extensions_autorisees = array(".pdf", ".PDF");

    if(!in_array($extension_du_fichier, $extensions_autorisees)){
        echo "Error: pas la bonne extension";
        return;
    }

    if(move_uploaded_file($dossier_temporaire,$dossier_uploads)){
        echo "Success! Youpi!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Uploader un fichier PDF</legend>

            <label>Uploader un fichier</label>
            <input type="file" name="fichier">

            <input type="submit" value="valider">
        </fieldset>
    </form>
</body>
</html>