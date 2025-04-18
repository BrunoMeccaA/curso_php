<?php

class Carro{
    public $cor;
    public $velocidadeMaxima;
    public $motor;

    function setVelocidadeMaxima($vel){
        $this->velocidadeMaxima = $vel;
    }
    function getVelocidadeMaxima(){
        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }
}

$bmw = new Carro;

$bmw->cor = "Branca";
$bmw->motor = 3.0;

$bmw->setVelocidadeMaxima(350);
$bmw->getVelocidadeMaxima();

$ferrari = new Carro;

$ferrari->cor = "Azul";
$ferrari->motor = 3.2;

$ferrari->setVelocidadeMaxima(410);
$ferrari->getVelocidadeMaxima();
?>