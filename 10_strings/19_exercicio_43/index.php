<?php

$frase = "carro - navio - helicoptero - barco - jangada";

$fraseArray = explode(" - ", $frase);

for ($i = 0; $i < count($fraseArray); $i++){
    echo "$fraseArray[$i] <br>";
}

?>