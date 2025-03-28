<?php

$str1 = "O rato roeu a roupa do rei de Roma"; //4 letras a
$contadorDeA = 0;

for($i = 0; $i < strlen($str1); $i++){
    if($str1 [$i] === "a"){
        $contadorDeA++;
    }
}

echo "O número de letra a na frase é de : $contadorDeA";

?>