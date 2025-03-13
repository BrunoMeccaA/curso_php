<?php

$carro = [
    'marca' => 'toyota',
    'modelo' => 'vrum', 
    'cor' => 'branco', 
    'portas' => 4, 
    'motor' => 1.8,
];

$marca = $carro['marca'];
$modelo = $carro['modelo'];
$motor = $carro['motor'];

echo "<br>";

echo "O carro tem a marca $marca, o modelo é $modelo e o motor é $motor.";

?>