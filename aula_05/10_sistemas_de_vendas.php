<?php

// Dados do sistema
$produtos = [
    ["nome" => "Notebook", "preco" => 3500],
    ["nome" => "Mouse", "preco" => 80],
    ["nome" => "Teclado", "preco" => 150]
];

$vendas = [
    ["produto" => "Notebook", "quantidade" => 2],
    ["produto" => "Mouse", "quantidade" => 5]
];

// Procura o produto pelo nome e devolve o array dele (ou null se nao existir)
function buscarProduto($produtos, $nome)
{
    foreach ($produtos as $produto) {
        if ($produto["nome"] === $nome) {
            return $produto;
        }
    }

    return null;
}

// Total de uma venda: preco do produto x quantidade
function calcularVenda($produtos, $venda)
{
    $produto = buscarProduto($produtos, $venda["produto"]);

    if ($produto === null) {
        return 0;
    }

    return $produto["preco"] * $venda["quantidade"];
}

// Lista cada venda com quantidade, valor unitario e total
function listarVendas($produtos, $vendas)
{
    echo "========== VENDAS ==========" . PHP_EOL;

    foreach ($vendas as $venda) {
        $produto = buscarProduto($produtos, $venda["produto"]);

        echo $venda["produto"] . PHP_EOL;

        if ($produto === null) {
            echo "Produto nao encontrado." . PHP_EOL;
        } else {
            $total = calcularVenda($produtos, $venda);

            echo "Quantidade: " . $venda["quantidade"] . PHP_EOL;
            echo "Valor unitario: R$ " . number_format($produto["preco"], 2, ",", ".") . PHP_EOL;
            echo "Total: R$ " . number_format($total, 2, ",", ".") . PHP_EOL;
        }

        echo PHP_EOL;
    }

    echo "============================" . PHP_EOL;
}

// Soma o total de todas as vendas
function calcularFaturamento($produtos, $vendas)
{
    $faturamento = 0;

    foreach ($vendas as $venda) {
        $faturamento = $faturamento + calcularVenda($produtos, $venda);
    }

    return $faturamento;
}

// Monta o relatorio completo
function mostrarRelatorio($produtos, $vendas)
{
    listarVendas($produtos, $vendas);

    $faturamento = calcularFaturamento($produtos, $vendas);

    echo "Faturamento: R$ " . number_format($faturamento, 2, ",", ".") . PHP_EOL;
}

// Programa principal
mostrarRelatorio($produtos, $vendas);