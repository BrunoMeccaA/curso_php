<?php

function verificarNumero($numero){
    if($numero % 2 == 0){
        echo "O numero $numero é PAR <br>";
    } else {
        echo "O numero $numero é IMPAR <br>";
    }
}

verificarNumero(17);
verificarNumero(10);


?>