<?php

function ordenarNumeros($arr){
    sort($arr);
    return $arr;
}

$arr = [1, 13, 20, 19, 41, 40, 8, 6, 4, 2, 5, 9];

$numerosOrdenados = ordenarNumeros($arr);
print_r($numerosOrdenados);

?>