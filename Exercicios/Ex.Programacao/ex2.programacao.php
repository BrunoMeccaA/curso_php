<?php

// Função verificar acesso
function verificarAcesso($idade, $acesso): string{
    if($idade >= 18 && $acesso){
        return "Acesso Autorizado. <br>";
    } else if($idade <= 18 && $acesso){
        return "Acesso Negado. Idade mínima requerida: 18 anos. <br>";
    } else {
        return "Acesso Negado. Autorização necessária. <br>";
    }
}

// Exemplo de Uso
echo verificarAcesso(26, 3.7);
echo verificarAcesso(12, 15.3);
echo verificarAcesso(41, false);


//-------------------------------------------------------------------------------------//

// Codigo que a plataforma aceita
//function verificarAcesso($idade, $autorizacao) {
    // Verifica se a pessoa tem 18 anos ou mais e autorização
 //   if ($idade >= 18 && $autorizacao) {
//        return "Acesso autorizado";
//    }
    // Verifica se a pessoa tem menos de 18 anos
//    elseif ($idade < 18) {
 //       return "Acesso negado. Idade mínima requerida: 18 anos";
//    }
//    // Caso a idade seja 18 ou mais, mas não tenha autorização
 //   else {  
  //      return "Acesso negado. Autorização necessária";
//    }
//}
 
// Exemplos de uso
// echo verificarAcesso(20, true) . "\n"; // Acesso autorizado
// echo verificarAcesso(17, true) . "\n"; // Acesso negado. Idade mínima requerida: 18 anos
// echo verificarAcesso(20, false) . "\n"; // Acesso negado. Autorização necessária
?>