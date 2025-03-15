<?php

$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for ($x = 0; $x < count($array); $x++){
    if($array[$x] % 2 == 0){
        echo "Número: $array[$x] <br>";
    }
}

?>