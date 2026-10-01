<?php 

echo "=================================="  .PHP_EOL;
echo "=            LOJA SENAC           =" .PHP_EOL;
echo "=================================="  .PHP_EOL;


/* Armazenamento de variaveis
    -Produto
    -Preco
    -Quantidade

    total = preco * quantidade

    Se o valor total for maior ou igual a 500.00 -> Desconto de 10%
    Senão desconto de 0%

    totalFinal = valor total - desconto
    */

    $produto = readline("Nome do produto: ");
    $preco  = (float) readline("Preço do produto: R$ ");
    $quantidade = (int) readline("Quantidade do produto: ");

    /* Preço de venda sem desconto */

    $total = $preco * $quantidade;

    if ($total >= 500){
        $desconto = $total * 0.10;
    }
    else {
        $desconto = 0; 
    }

    $totalFinal = $total - $desconto;


    echo "============================================="  .PHP_EOL;
    echo "========       RESUMO DA VENDA       ========"  .PHP_EOL;
    echo "============================================="  .PHP_EOL;
    echo "Produto : $produto ". PHP_EOL;
    echo "Quantidade: $quantidade ". PHP_EOL;
    echo "Valor Bruto: ".number_format($total, 2, ",", ".") . PHP_EOL;
    echo "Desconto: R$ ".number_format($desconto, 2, ",", ".") . PHP_EOL;
    echo "Total Final: R$".number_format($totalFinal, 2, ",", ".") . PHP_EOL;
    
