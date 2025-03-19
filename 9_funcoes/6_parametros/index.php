<?php

function velocidadeMaxima($vel){
    if(is_int($vel)){
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor, informe um numero inteiro <br>";
    }
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

// Não pode executar funções que exigem parametros e não tem parametros.
// velocidadeMaxima();

echo "Testando continuando <br>";

$velocidade = 125;
velocidadeMaxima($velocidade);

// PHP ignora parametro desnecessário
velocidadeMaxima(250, "teste");
velocidadeMaxima("teste");

// Mais de 1 parametro
function descreverAnimal($nome, $raca){
    echo " O $nome é da raça $raca <br>";
}

descreverAnimal("Bob", "vira lata");
descreverAnimal("Shark", "Pastor Alemão");

?>