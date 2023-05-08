<?php

for($i = 0; $i <= 100; $i++){
    if($i == 15 || $i == 30 || $i == 70){
        continue;
    }
    echo "$i<br>";
}


$i2 = 0;
while($i2 <= 100){
    switch($i2){
        case "15":
            break;
    
        case "30":
            break;
    
        case "70":
            break;
    
        default:
            echo "$i2<br>";
    }
    $i2++;
}


