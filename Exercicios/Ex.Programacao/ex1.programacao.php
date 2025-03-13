<?php

// Função comparar números inteiros
function compararNumeros($num1, $num2){
    if($num1 > $num2){
        return "O primeiro número é maior. <br>";
    } else if($num1 < $num2){
        return "O segundo número é maior. <br>";
    } else {
        return "Os números são iguais. <br>";
    }
}

// Testando a Função
echo compararNumeros(10,5);
echo "\n";
echo compararNumeros(2,14);
echo "\n";
echo compararNumeros(4,4);
echo "\n";

?>