<?php

$arr = [
    'nome' => 'Matheus',
    'idade' => 29
];

if(array_key_exists("nome", $arr)){
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe ! <br>";
}

if(array_key_exists("profissao", $arr)){
    echo "A chave existe !<br>";
} else {
    echo "A chave não existe ! <br>";
}

if(isset($arr['nome'])){
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe ! <br>";
}

if(isset($arr['teste'])){
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe ! <br>";
}

if(isset($x)){
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe ! <br>";
}
?>