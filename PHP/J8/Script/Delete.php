<?php
    require_once(__DIR__."/pdo.php");

    $type = $_GET["type"];

    if(empty($_GET))
    {
        header('location: ../Index.php');
    }
    
    $pdo->prepare("DELETE FROM $type WHERE `id_$type` = ?")->execute([$_GET["id"]]);

    header("location: ../Index.php");