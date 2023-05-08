<?php

$A1 = 41;
$A2 = 50;
$B1 = 60;
$B2 = 80;
$C1 = 100;
$C2 = 50;

function Additionner($num1,$num2){
    $somme = $num1 + $num2;
    return $somme;
}

function Soustraction($num1,$num2){
    $Soustract = $num1 - $num2;
    return $Soustract;
}

function Multiplie($num1,$num2){
    $Multiplie = $num1 * $num2;
    return $Multiplie;
}

function Division($num1,$num2){
    $Division = $num1 / $num2;
    return $Division;
}

echo Additionner($A1, $A2).'<br>';
echo Additionner($B1, $B2).'<br>';
echo Additionner($C1, $C2).'<br><br>';

echo Soustraction($A1, $A2).'<br>';
echo Soustraction($B1, $B2).'<br>';
echo Soustraction($C1, $C2).'<br><br>';

echo Multiplie($A1, $A2).'<br>';
echo Multiplie($B1, $B2).'<br>';
echo Multiplie($C1, $C2).'<br><br>';

echo Division($A1, $A2).'<br>';
echo Division($B1, $B2).'<br>';
echo Division($C1, $C2).'<br><br>';