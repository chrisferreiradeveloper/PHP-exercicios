<?php

// Cadastra 5 produtos e devolve o array de arrays associativos
function cadastrarProdutos()
{
    $produtos = [];

    for ($i = 1; $i <= 5; $i++) {
        echo "Produto " . $i . PHP_EOL;
        $nome = readline("Nome: ");
        $preco = (float) readline("Preco: ");
        $quantidade = (int) readline("Quantidade: ");

        $produtos[] = [
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade
        ];
    }

    return $produtos;
}

// Mostra a lista de produtos
function listarProdutos($produtos)
{
    echo PHP_EOL . "========= LOJA SENAC =========" . PHP_EOL;
    echo "PRODUTOS" . PHP_EOL;

    foreach ($produtos as $produto) {
        echo $produto["nome"] . PHP_EOL;
        echo "Preco: R$ " . number_format($produto["preco"], 2, ",", ".") . PHP_EOL;
        echo "Estoque: " . $produto["quantidade"] . PHP_EOL;
        echo PHP_EOL;
    }

    echo "==============================" . PHP_EOL;
}

// Quantidade de produtos cadastrados
function contarProdutos($produtos)
{
    return count($produtos);
}

// Soma das unidades de todos os produtos
function somarUnidades($produtos)
{
    $total = 0;

    foreach ($produtos as $produto) {
        $total = $total + $produto["quantidade"];
    }

    return $total;
}

// Valor total do estoque (preco x quantidade de cada produto)
function calcularValorEstoque($produtos)
{
    $total = 0;

    foreach ($produtos as $produto) {
        $total = $total + ($produto["preco"] * $produto["quantidade"]);
    }

    return $total;
}

// Descobre o produto mais caro
function buscarMaisCaro($produtos)
{
    $maisCaro = $produtos[0];

    foreach ($produtos as $produto) {
        if ($produto["preco"] > $maisCaro["preco"]) {
            $maisCaro = $produto;
        }
    }

    return $maisCaro;
}

// Lista produtos com menos de 5 unidades
function listarEstoqueBaixo($produtos)
{
    echo PHP_EOL . "PRODUTOS COM ESTOQUE BAIXO" . PHP_EOL;

    $encontrou = false;

    foreach ($produtos as $produto) {
        if ($produto["quantidade"] < 5) {
            echo $produto["nome"] . PHP_EOL;
            $encontrou = true;
        }
    }

    if (!$encontrou) {
        echo "Nenhum produto com estoque baixo." . PHP_EOL;
    }
}

// Lista produtos que custam mais de R$ 100
function listarCaros($produtos)
{
    echo PHP_EOL . "PRODUTOS ACIMA DE R$ 100,00" . PHP_EOL;

    $encontrou = false;

    foreach ($produtos as $produto) {
        if ($produto["preco"] > 100) {
            echo $produto["nome"] . PHP_EOL;
            $encontrou = true;
        }
    }

    if (!$encontrou) {
        echo "Nenhum produto acima de R$ 100,00." . PHP_EOL;
    }
}

// Mostra o resumo do estoque
function mostrarResumo($quantidadeProdutos, $unidades, $valorEstoque, $maisCaro)
{
    echo "Produtos cadastrados: " . $quantidadeProdutos . PHP_EOL;
    echo "Unidades em estoque: " . $unidades . PHP_EOL;
    echo "Valor do estoque: R$ " . number_format($valorEstoque, 2, ",", ".") . PHP_EOL;
    echo "Produto mais caro: " . $maisCaro["nome"] . " (R$ " . number_format($maisCaro["preco"], 2, ",", ".") . ")" . PHP_EOL;
}

// Programa principal
$produtos = cadastrarProdutos();
listarProdutos($produtos);

$quantidadeProdutos = contarProdutos($produtos);
$unidades = somarUnidades($produtos);
$valorEstoque = calcularValorEstoque($produtos);
$maisCaro = buscarMaisCaro($produtos);

mostrarResumo($quantidadeProdutos, $unidades, $valorEstoque, $maisCaro);
listarEstoqueBaixo($produtos);
listarCaros($produtos);