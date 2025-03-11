<?php

$a = 31;
$b = 96;
$x = "teste";


if (is_numeric ($a) || is_string ($a)){
    $multi1 = $a * 2;
    if($multi1 > 100){
        echo "O numero é maior que 100 <br>";
    } else {
        echo "O número não é maior que 100 <br>";
    }
} else {
    echo "Não é um número <br>";
}

if (is_numeric ($b) || is_string ($b)){
    $multi2 = $b * 2;
    if($multi2 > 100){
        echo "O numero é maior que 100 <br>";
    } else {
        echo "O número não é maior que 100 <br>";
    }
} else {
    echo "Não é um número <br>";
}


if (is_numeric ($c) || is_string ($c)){
    $multi3 = $c * 2;
    if($multi3 > 100){
        echo "O numero é maior que 100 <br>";
    } else {
        echo "O número não é maior que 100 <br>";
    }
} else {
    echo "Não é um número <br>";
}
?>