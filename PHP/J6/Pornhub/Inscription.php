<?php
require "includes/Header.php";
require_once(__DIR__."/Script/pdo.php");
var_dump($pdo);
?>
<div class="contenu mx-auto">
    <form action="Script/validate.php" method="post">
        <fieldset>
            <ul class="col list-unstyled p-3 w-25">
                <li class="p-3"><legend>Inscription</legend></li>
                <li class="p-3">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" required>
                </li>
                <li class="p-3">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" required>
                </li>
                <li class="p-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </li>
                <li class="p-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" minlength="7" required>
                </li>
                <li class="BT-submit p-3">
                    <input type="submit" value="valider">
                </li>
            </ul>
        </fieldset>
    </form>
</div>
<?php require "includes/Footer.php"; ?>
