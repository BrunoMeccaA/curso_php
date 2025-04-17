<?php

$arr = [1, 2, 43, 12, 10, 6, 3, 0, 51, 20, 18, 11];

$pares = array_filter($arr, function($numero){
    return $numero % 2 === 0;
});

print_r($pares);

?>