<?php

// Função comparar números inteiros
function compararNumeros(int $num1, int $num2): string {
    if ($num1 > $num2) {
        return "O primeiro número é maior.";
    } elseif ($num2 > $num1) {
        return "O segundo número é maior.";
    } else {
        return "Os números são iguais.";
    }
}
 
// Exemplo de uso
echo compararNumeros(10, 5);  // Saída: O primeiro número é maior.
echo compararNumeros(3, 8);   // Saída: O segundo número é maior.
echo compararNumeros(7, 7);   // Saída: Os números são iguais.
?>
