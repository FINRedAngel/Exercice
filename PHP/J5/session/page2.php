<?php
session_start();
if(!isset($_SESSION["user_id"])){
    echo 'pas de Compte!<br>';
    echo  '<a href="index1.php">Back</a>';
    return;
}

echo 'Bonjour Mr '.$_SESSION['prenom'].' '.$_SESSION['nom'].', bienvenue sur la page 2<br>';
?>


<a href="page1.php">page 1<br></a>
<a href="page3.php">page 3<br></a>
<a href="deconnection.php">Deconnection</a>