<?php

class Calculadora{
    function somar($a, $b){
        return $a + $b;
    }

    function subtrair($a, $b){
        return $a - $b;
    }

    function multiplicar($a, $b){
        return $a * $b;
    }

    function dividir($a, $b){
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Erro: Divisão por zero não é permitida.";
        }
    }
}

$calculadora = new Calculadora;

$somar = $calculadora->somar(5, 15);
$subtrair = $calculadora->subtrair(10, 2);
$multiplicar = $calculadora->multiplicar(20, 5);
$dividir = $calculadora->dividir(10, 2);

?>