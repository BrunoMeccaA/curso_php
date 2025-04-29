<?php

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataB->setDate(2022, 10, 10);
$dataC->setDate(2022, 10, 10);

if($dataB > $dataA){
    echo "A data B é maior que a data A <br>";
}

if($dataA < $dataB){
    echo "A data A é maior que a data B <br>";
}

if($dataA == $dataC){
    echo "As datas A e C são iguais <br>";
}

?>