<?php

$age = 25;

if($age > 20){
echo "vous avez plus de 20 ans<br>";
}
else{
    echo "vous avez moins de 20 ans<br>";
}

echo ($age > 20)? "vous avez plus de 20 ans<br>" : "vous avez moins de 20 ans<br>";

$size = "S";

if($size == "S"){
    echo "La taille choisi est le $size<br>";
}
else if($size == "M"){
    echo "La taille choisi est le $size<br>";
}
else if($size == "L"){
    echo "La taille choisi est le $size<br>";
}
else{
    echo "La taille choisi est le $size<br>";
}

switch($size){
    case "S":
        echo "La taille choisi est le $size<br>";
        break;

    case "M":
        echo "La taille choisi est le $size<br>";
        break;

    case "L":
        echo "La taille choisi est le $size<br>";
        break;

    default:
        echo "La taille choisi est le $size<br>";
}