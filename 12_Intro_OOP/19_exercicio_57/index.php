<?php

class Cachorro{
    public $raca;
    public $cor;
    public $peso;
    public $altura;
    public $idade;


    function __construct($raca, $cor, $peso, $altura, $idade){
    $this->raca = $raca;
    $this->cor = $cor;
    $this->peso = $peso;
    $this->altura = $altura;
    $this->idade = $idade;
    }
}

$toty = new Cachorro("Pincher", "Bege", 15, 0.43, 6);
echo "O cachorro é da raça $toty->raca, tem a cor $toty->cor, um peso de $toty->peso kg, uma altura de $toty->altura cm, ele(a) tem $toty->idade anos de idade <br>";

?>