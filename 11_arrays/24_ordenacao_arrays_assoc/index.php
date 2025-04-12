<?php

$arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];
// ( asort ) --> ORDEM CRESCENTE PELO VALOR
asort($arr);

print_r($arr);
echo "<br>";

$arr2 = [
    'Matheus' => 29,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];

// ( arsort ) --> ORDEM DECRESCENTE PELO VALOR
arsort($arr2);

print_r($arr2);
echo "<br>";

// ( ksort ) --> ORDEM CRESCENTE PELAS CHAVES
ksort($arr2);

print_r($arr2);
echo "<br>";

// ( krsort ) --> ORDEM DECRESCENTE PELAS CHAVES
krsort($arr2);

print_r($arr2);
echo "<br>";
?>