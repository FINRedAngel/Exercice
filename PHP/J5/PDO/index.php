<?php
require_once(__DIR__."/pdo.php");
$requete = $pdo->query("SELECT * FROM adresse");
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($resultats);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Adresse 1</th>
    <th scope="col">Adresse 2</th>
    <th scope="col">Code Postal</th>
    <th scope="col">Ville</th>
  </tr>
</thead>
<tbody>
    <?php foreach($resultats as $adresse) { ?>
    <tr>
        <th scope="row"><?php echo $adresse['id_adresse'];?></th>
        <td><?php echo $adresse['adresse1'];?></td>
        <td><?php echo $adresse['adresse2'];?></td>
        <td><?php echo $adresse['code_postal'];?></td>
        <td><?php echo $adresse['ville'];?></td>
    </tr>
    <?php } ?>
</tbody>
</table>
<form action="validate.php" method="post">
    <fieldset>
        <legend>Ajouter une adresse:</legend>

        <label for="adresse1">Adresse 1</label>
        <input type="text" name="adresse1" id="adresse1" required>

        <label for="adresse2">Adresse 2</label>
        <input type="text" name="adresse2" id="adresse2">

        <label for="code_postal">Code Postal</label>
        <input type="text" name="code_postal" id="code_postal" required>

        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" required>

        <input type="submit" value="valider">
    </fieldset>
</form>
</body>
</html>