<?php
session_start();

if(isset($_SESSION["user_id"])){
    header("location: page1.php");
}

$_SESSION["nom"] = "LEAB";
$_SESSION["prenom"] = "Vincent";
$_SESSION["user_id"] = 1;

header("location: page1.php");