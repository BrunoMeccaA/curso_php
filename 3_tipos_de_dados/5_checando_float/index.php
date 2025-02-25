<?php
    $a = "Teste";
    $b = 12.8;

    if (is_float($a)) {
        echo "É float 1! <br>";
    }

    if (is_float($b)) {
        echo "È float 2! <br>";
    }

    if (is_float(52356763.32478637826)) {
        echo "È float 3! <br>";
    }

    if (is_float("Teste")) {
        echo "È float 4! <br>";
    }
?>