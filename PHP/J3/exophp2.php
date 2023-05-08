<?php

$categories = [
    [
	    'id' => 1,
        'categorie' => 'téléphones'
    ],
    [
        'id' => 2,
        'categorie' => 'voitures'
    ],
    [
        'id' => 3,
        'categorie' => 'ordinateurs'
    ],
    [
	    'id' => 4,
        'categorie' => 'vélos'
    ],
    [
        'id' => 5,
        'categorie' => 'chaussures'
    ],
    [
        'id' => 6,
        'categorie' => 'cables'
    ]	
];

// Utiliser le tableau ci - dessus pour afficher un bloc catÃ©gorie de facon dynamique.
// Vous pouvez utiliser un composant boostrap pour cet exercice.
// Afficher les catÃ©gories dans un bloc sous forme d\'une liste ul/li.
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>exophp2</title>
</head>
<body>
<div class="container bg-warning">
    <div class="row">
        <?php foreach($categories as $categorie) { ?>
            <ul class="nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <?php echo $categorie['categorie'];?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        <?php } ?>
    </div>
</div>
</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>exophp2</title>
</head>
<body>
    <ul class="nav">
        <?php foreach($categories as $categorie) { ?>
        <li class="nav-item">
            <a class="nav-link active" href="#"><?php echo $categorie['categorie'];?></a>
        </li>
        <?php } ?>
    </ul>

    <ul class="list-group">
        <?php foreach($categories as $categorie) { ?>
        <li class="list-group-item"><?php echo $categorie['categorie'];?></li>
        <?php } ?>
    </ul>
</body>
</html>