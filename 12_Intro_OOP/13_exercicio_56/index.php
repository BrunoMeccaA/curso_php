<?php
//Classe base
class Humano {
    public $maos = 2;
    public $pernas = 2;

    public function falar(){
        echo "Estou falando groselhas <br>";
    }
}
class Professor extends Humano {
    public $materia = "IA";
    public function lecionando(){
        echo "O professor está dando aula de $this->materia <br>";
    }
}

$toty = new Humano;

echo "$toty->maos <br>";
$toty->falar();

$joao = new Professor;

echo "$joao->pernas <br>";
echo "$joao->materia <br>";

$joao->falar();
$joao->lecionando();

?>