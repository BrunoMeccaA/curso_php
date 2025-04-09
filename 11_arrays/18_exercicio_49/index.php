<?php

$tipo = "Gato";
$nome = "Poconho";
$raca = "xingLing";
$cor = "caramelo";
$idade = 5;

$animal = compact("tipo", "nome", "raca", "cor", "idade");

print_r($animal);
echo "<br>";

foreach($animal as $caracteristica => $value){
    echo "$caracteristica: $value <br>";
}  

?>