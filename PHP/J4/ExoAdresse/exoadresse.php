<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adresse.php" method="post">
        <fieldset>
            <legend>Adresse</legend>

            <label for="adresse1">Adresse 1</label>
            <input type="text" name="adresse1" id="adresse1" placeholder="Veuillez taper votre adresse 1" required>

            <label for="adresse2">Adresse 2</label>
            <input type="text" name="adresse2" id="adresse2" placeholder="Veuillez taper votre adresse 2" required>

            <label for="code_postal">Code postal</label>
            <input type="text" name="code_postal" id="code_postal" maxlength="5" placeholder="Veuillez taper votre Code Postal" required>

            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" placeholder="Veuillez taper votre Ville" required>

            <input type="submit" value="valider">
        </fieldset>
    </form>
</body>
</html>