<?php
for($i = 100;$i > 0; $i--){
    echo "$i<br>";
}
echo "----------------------------------------------------------------------------------------------<br>";
$ii = 100;
while($ii > 0){
    echo "$ii<br>";
    $ii--;
}
echo "----------------------------------------------------------------------------------------------<br>";
$taille = 180;
if($taille == 180){
    echo "Success<br>";
}
else{
    echo "error<br>";
}
echo "----------------------------------------------------------------------------------------------<br>";
for($i2 = 1000; $i2 > 0; $i2 -= 10){
    echo "$i2<br>";
}
echo "----------------------------------------------------------------------------------------------<br>";
$iii = 1000;
while($iii > 0){
    echo "$iii<br>";
    $iii -= 10;
}
echo "----------------------------------------------------------------------------------------------<br>";
for($i3 = 0; $i3 < 100; $i3++){
    if($i3 != 29){
        echo "$i3<br>";
    }
}
echo "----------------------------------------------------------------------------------------------<br>";
for($i4 = 0; $i4 < 100; $i4++){
    echo "$i4<br>";
    if($i4 == 29){
        return;
    }
}