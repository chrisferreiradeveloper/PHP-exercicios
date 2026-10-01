<?php

// Geracao automatica
$codigo = rand(1000, 9999);
$data = date("d/m/Y");

// Entrada de dados
$cliente = readline("Nome do cliente: ");
$produto = readline("Produto: ");
$valorUnitario = (float) readline("Valor unitario: ");
$quantidade = (int) readline("Quantidade: ");
$pagamento = readline("Forma de pagamento: ");
$distancia = (float) readline("Distancia da entrega (km): ");

// Validacoes
if ($valorUnitario <= 0) {
    echo "Valor unitario invalido." . PHP_EOL;
} elseif ($quantidade <= 0) {
    echo "Quantidade invalida." . PHP_EOL;
} elseif ($distancia < 0) {
    echo "Distancia invalida." . PHP_EOL;
} else {
    // Subtotal
    $subtotal = $valorUnitario * $quantidade;

    // Frete
    if ($distancia <= 3) {
        $frete = 5;
    } elseif ($distancia <= 8) {
        $frete = 10;
    } else {
        $frete = 18;
    }

    // Desconto pelo subtotal
    if ($subtotal >= 200) {
        $percentual = 10;
    } elseif ($subtotal >= 100) {
        $percentual = 5;
    } else {
        $percentual = 0;
    }

    // Desconto adicional do PIX (comparacao estrita)
    if ($pagamento === "pix") {
        $percentual = $percentual + 2;
    }

    // Calculos finais
    $desconto = $subtotal * $percentual / 100;
    $total = $subtotal - $desconto + $frete;

    // Saida
    echo PHP_EOL . "===== COMPROVANTE DO PEDIDO =====" . PHP_EOL;
    echo "Pedido: " . $codigo . PHP_EOL;
    echo "Data: " . $data . PHP_EOL;
    echo "Cliente: " . $cliente . PHP_EOL;
    echo "Produto: " . $produto . PHP_EOL;
    echo "Quantidade: " . $quantidade . PHP_EOL;
    echo "Valor unitario: R$ " . number_format($valorUnitario, 2, ",", ".") . PHP_EOL;
    echo "Subtotal: R$ " . number_format($subtotal, 2, ",", ".") . PHP_EOL;
    echo "Distancia: " . $distancia . " km" . PHP_EOL;
    echo "Frete: R$ " . number_format($frete, 2, ",", ".") . PHP_EOL;
    echo "Pagamento: " . $pagamento . PHP_EOL;
    echo "Desconto: " . $percentual . "%" . PHP_EOL;
    echo "Valor do desconto: R$ " . number_format($desconto, 2, ",", ".") . PHP_EOL;
    echo "Total do pedido: R$ " . number_format($total, 2, ",", ".") . PHP_EOL;
}