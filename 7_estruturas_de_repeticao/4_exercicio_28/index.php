<?php

$x = 4;
$limite = 30;

while($x < $limite){
    echo "Executando o loop $x . <br>";
    if($x === 24){
        echo "Terminou o loop <br>";
    break;
    }
    $x += 2;
}

?>