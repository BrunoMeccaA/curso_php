<?php

$idade1 = 16;
$idade2 = 18;
$idade3 = 26;

$maiorIdade = 18;
$msg = "Você é maior de idade <br>";

if($idade1 >= $maiorIdade){
    echo "1 -";
    echo $msg;
} else {
    echo "Você não é maior de idade <br>";
}

if($idade2 >= $maiorIdade){
    echo "2 -";
    echo $msg;
} else {
    echo "Você não é maior de idade <br>";
}

if($idade3 >= $maiorIdade){
    echo "3 -";
    echo $msg;
} else {
    echo "Você não é maior de idade <br>";
}

?>
