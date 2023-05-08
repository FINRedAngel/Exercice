<?php

$clients = ["LEAB","Vincent",33,"Noisy le Grand",93160,true];
$clients2 = ["nom" => "LEAB","Prenom" => "Vincent","age" => 33,"Ville" => "Noisy le Grand","Code Postal" => 93160,"Active" => true];
// echo "$clients[0]<br>";

for($i = 0; $i < 6; $i++){
    echo "$clients[$i]<br>";
}

echo "<ul>";
foreach($clients2 as $data){
    echo "<li> $data </li>"; 
}
echo "</ul>";

echo "$clients2[nom]<br>";

foreach($clients2 as $key => $value){
    echo "la clé est $key e la valeur est $value<br>";
}

var_dump($clients);
