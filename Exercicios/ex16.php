<?php

$x =5;
$y = 3;

// Operador IGUALDaDE
if($x == $y){
    echo "Teste 1 É igual <br>";
}

if($x == $x){
    echo "Teste 2 É igual <br>";
}

// Operador DIFERENÇA
if($x != $y){
    echo "Teste 1 É diferente <br>";
}

if($x != $x){
    echo "Teste 2 É diferente <br>";
}

// Operador IDENTICO
if($x === $y){
    echo "Teste 1 É identico <br>";
}

if($x === $x){
    echo "Teste 2 É identico <br>";
}

// Operador NÃO IDENTICO
if($x !== $y){
    echo "Teste 1 É nao identico <br>";
}

if($x !== $x){
    echo "Teste 2 É nao identico  <br>";
}
?>