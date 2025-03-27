<?php

function sumEvenNumbers($num){
    // iniciar variavel soma
    $soma = 0;
    // inicia o loop para percorrer os numeros
    for($x = 1; $x <= $num; $x++){
        // verifica se o numero é par
        if($x % 2 == 0){
            // acumula a soma
            $soma += $x;
        }
    }
    // retorna a soma dos pares
    return $soma;
}

//Exemplo do uso
echo "A soma dos números pares é: <br>";
echo sumEvenNumbers(15);

?>