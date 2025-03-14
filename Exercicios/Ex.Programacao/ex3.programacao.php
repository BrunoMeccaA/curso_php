<?php
// Função Calcular Desconto
function calcularDesconto($valorProduto, $categoria){
    // Valor inicial do desconto
    $desconto = 0;

    // Desconto de acordo com a categoria
    switch($categoria){
        case "eletronicos":
            $desconto = 0.10; // 10% de desconto
        case "vesturario":
            $desconto = 0.20; // 20% de desconto
        case "alimentos":
            $desconto = 0.05; // 5% de desconto
        break;
    default:
        $desconto = 0; // Outras categorias: nenhum desconto.
        break;
    }

    // Calculando o valor final com desconto aplicado
    $valorComDesconto = $valorProduto - ($valorProduto * $desconto);
    return $valorComDesconto;

}

// Exemplo de uso
$valorProduto = 103042;
$categoria = "vestuario";
$valorComDesconto = calcularDesconto($valorProduto, $categoria);
echo "Valor com desconto R$ " . number_format($valorComDesconto, 2, ',', '.');
?>