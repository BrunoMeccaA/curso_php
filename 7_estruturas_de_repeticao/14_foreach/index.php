<?php

$nomes = ["SrBatata", "Grilo", "Martilius", "Palito"];

$a = 10;

foreach($nomes as $nome){
    echo "O nome do indice atual é $nome <br>";
    if($nome == "SrBatata"){
        echo "opa $a <br>";
    }
}

?>