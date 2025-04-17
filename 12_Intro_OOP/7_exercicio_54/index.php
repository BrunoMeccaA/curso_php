<?php

class Pessoa {
    public $nome;
    public $idade;

    function andar($m){
        echo "A pessou andou $m metros <br>";
    }
}

$matheus = new Pessoa;

$matheus->nome = "Matheus";
$matheus->idade = 29;

echo " o nome dele é $matheus->nome e tem $matheus->idade anos <br>";

$matheus->andar(20);

$joaquin = new Pessoa;

$joaquin->nome = "Joaquin";
$joaquin->idade = 32;

echo " o nome dele é $joaquin->nome e tem $joaquin->idade anos <br>";

$joaquin->andar(30);
?>