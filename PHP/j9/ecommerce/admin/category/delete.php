<?php
if(empty($_GET['id_category'])){
    header('Location: index.php');
}
else{
    require_once '../config/pdo.php';

    $pdo->prepare("DELETE FROM category WHERE id_category = ?")->execute([$_GET['id_category']]);
    
    header('Location: index.php');
}