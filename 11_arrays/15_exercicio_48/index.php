<?php

$arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

$remover = array_splice($arr, 2, 2);

print_r($arr);
echo "<br>";
print_r($remover)
?>