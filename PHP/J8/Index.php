<?php
session_start();

require_once(__DIR__."/Script/pdo.php");
$requete1 = $pdo->query("SELECT * FROM Adresse");
$resultats1 = $requete1->fetchAll(PDO::FETCH_ASSOC);
$requete2 = $pdo->query("SELECT * FROM Transporteur");
$resultats2 = $requete2->fetchAll(PDO::FETCH_ASSOC);
$requete3 = $pdo->query("SELECT * FROM Produit");
$resultats3 = $requete3->fetchAll(PDO::FETCH_ASSOC);
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
<body class="bg-dark">
    <header>
        <?php
            if(!isset($_SESSION["id_user"])){
                echo '<a href="Script/Connexion.php">Connexion</a>';
            }
            else{
                echo $_SESSION["prenom"].$_SESSION["nom"].'<a href="Script/Deconnexion.php">Deconnexion</a>';
            }
        
        ?>
    </header>
    <?php
        if(!isset($_SESSION["id_user"])){
            echo '<h1>Vous êtes pas connecter</h1>';
        }
        else{
            include 'Includes/Contenu.php';
        }
    ?>
</body>
</html>