<?php
$test1 = "Red";
$test2 = "Leab";
$test3 = 123;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $test1 ?></title>
</head>
<body>
<?=var_dump($test3);?>
<br>
<?=var_dump(strval($test3));?>
</body>
</html>