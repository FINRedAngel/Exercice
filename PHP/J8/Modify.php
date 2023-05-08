<?php
    require_once(__DIR__."/Script/pdo.php");

    if(!empty($_POST)){
        header('Location: Index.php');
    }
    
    $type = $_GET["type"];
    $id = $_GET["id"];

    $requete = $pdo->prepare("SELECT * FROM $type WHERE id_$type = ?");
    $requete->execute([$id]);
    $resultats = $requete->fetch(PDO::FETCH_ASSOC);
    
    $news = $pdo->prepare("SELECT * FROM $type WHERE id_$type = ?")->execute([$id]);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>CRUD info</title>
</head>
<body>
    <div class="contenu">
        <form action="<?php echo $_SERVER['PHP_SELF'].'?id='.$_GET['id']; ?>" method="post">
            <fieldset>
                <ul class="col list-unstyled p-3 w-25">
                    <?php foreach($resultats as $key => $value){
                        if(str_starts_with($key, 'id')){
                            continue;
                        }
                        else{
                            echo '<li class="p-3">
                                <label for="'.$key.'">'. substr($key,1).'</label><br>
                                <input type="text" name="'.$value.'" id="'.$value.'" value="'.$value.'" required>
                            </li>';
                        }
                    } ?>
                    <li class="BT-submit p-3">
                        <input type="submit" value="valider"> <input type="button" value="Retour" onclick="history.back()">
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
</body>
</html>
