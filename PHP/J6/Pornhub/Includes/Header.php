<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Style1.css">
    <title>Pornbub Recrute</title>
</head>
<body>
    <header class="d-flex justify-content-between">
        <div class="w-50">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand w-25" href="Accueil.php"><img class="img-fluid" src="Images/Pornhub-logo.png" alt="Logo Pornhub"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="menu">
                        <li>
                            <a href="Accueil.php">Accueil</a>
                        </li>
                        <li>
                            <a href="News.php">News</a>
                        </li>
                        <?php
                            if(isset($_SESSION["id_user"])){
                                echo '<li>
                                        <a href="CV.php">CV</a>
                                    </li>';
                            }
                        ?>
                        <li>
                            <a href="Contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Lien
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Pornhub</a>
                                <a class="dropdown-item" href="#">Laurent Ndur</a>
                                <a class="dropdown-item" href="#">Site LEABertin</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="mr-5">
            <nav class="navbar navbar-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Recherche">
                    <button class="btn my-2 my-sm-0 border border-dark mr-5 search" type="submit">Rechercher</button>
                </form>
                <?php
                    if(!isset($_SESSION["id_user"])){
                        echo '<ul class="menu-connexion connecter">
                                <li><a href="Script/Connexion.php">Connexion</a></li><li><a href="Inscription.php">Inscription</a></li>
                            </ul>';
                    }
                    else{
                        echo "<ul class='menu-connexion'>
                                <li>".$_SESSION["nom"]." ".$_SESSION["prenom"]."</li><li><a class='deconnecter' href='Script/Deconnexion.php'>Deconnexion</a></li>
                            </ul>";
                    }
                ?>
            </nav>
        </div>
    </header>