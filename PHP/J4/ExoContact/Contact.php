<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Adresse</legend>

            <label for="sujet">Sujet</label>
            <input type="text" name="sujet" id="sujet" placeholder="Veuillez taper votre sujet" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Veuillez taper votre email" required>

            <label for="piece_jointe">Piece jointe</label>
            <input type="file" name="piece_jointe">

            <label for="message">Message</label>
            <input type="text" name="message" id="message" placeholder="Veuillez taper votre message" required>

            <input type="submit" value="valider">
        </fieldset>
    </form>
</body>
</html>