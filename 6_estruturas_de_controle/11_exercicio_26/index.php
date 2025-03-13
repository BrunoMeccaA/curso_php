<?php

$vel = 36;
$velmax = 40;

if($vel < 40){
    echo "Parabens! Você está numa velocidade segura <br>";
} else if ($vel == $velmax){
    echo "Cuidado! Você está mo limite de velocidade <br>";
} else {
    echo "Você foi multado, velocidade acima do permitido <br>";
}