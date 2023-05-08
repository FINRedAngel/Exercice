<?php
    require_once(__DIR__."/pdo.php");

    if(empty($_GET))
    {
        header('location: ../Index.php');
    }

    $pdo->prepare("DELETE FROM news WHERE id_news = ?")->execute([$_GET["id_news"]]);

    header("location: ../News.php");