<?php

    $pessoa = [
        'nome' => 'Jorge',
        'altura' => '1.82',
        'idade' => '30',
        'profissao' => 'matador de grilo',
    ];

$maioridade = 18;

// DESAFIO

if($pessoa['idade'] >= $maioridade) {
    echo "A pessoa é maior de idade!";
}

?>