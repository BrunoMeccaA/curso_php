<?php

$array = [17, "SrBatata", true, false, "SrMosquito", 17.32, "Teste", true, [], 19, 27, "Final"];

$x = count($array);
$y = 0;

while($y < $x){
    if(is_string($array[$y])){
        echo $array[$y] . "<br>";
    }
$y++;
}
?>