<?php

// Função verificar acesso
function verificarAcesso($idade = 18,$acesso = null){
    if($idade >= 18 && $acesso){
        return "Acesso Autorizado. <br>";
    } else if($idade <= 18 && $acesso){
        return "Acesso Negado. Idade mínima requerida: 18 anos. <br>";
    } else {
        return "Acesso Negado. Autorização necessária. <br>";
    }
}

// Testando a Função
echo verificarAcesso(26, 3.7);
echo "\n";
echo verificarAcesso(12, 15.3);
echo "\n";
echo verificarAcesso(41, false);
echo "\n";

?>