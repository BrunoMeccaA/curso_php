<?php

$num = (10);

function sumEvenNumbers($num){
    if ($num <= 0){
        return 0;
    }

$soma = 0;

    for($x = 1; $x <= $num; $x++){
        if($x % 2 == 0){
        $soma += $x;
        }
    }
    return $soma;
}

echo "A soma dos números pares de 1 até $num é: <br>";
echo sumEvenNumbers(10);

?>