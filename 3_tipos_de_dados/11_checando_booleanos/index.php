<?php

$a = true;

if (is_bool($a)) {
    echo "È um booleano 1 <br>";
}

if (is_bool(0)) {
    echo "È um booleano 2 <br>";
}

if (is_bool(false)) {
    echo "È um booleano 3 <br>";
}

if (is_bool("sfkashdgf")) {
    echo "È um booleano 4 <br>";
}

if (0 == false){
    echo "0 è considerado falso! <br>";
}