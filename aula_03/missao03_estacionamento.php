<?php

// Geracao automatica
$numero = rand(1000, 9999);
$data = date("d/m/Y");

// Entrada de dados
$cliente = readline("Nome do cliente: ");
$placa = readline("Placa do veiculo: ");
$tipo = readline("Tipo do veiculo (moto, carro ou suv): ");
$horas = (int) readline("Quantidade de horas: ");

// Validacoes
if ($horas <= 0) {
    echo "Quantidade de horas invalida." . PHP_EOL;
} elseif ($tipo != "moto" && $tipo != "carro" && $tipo != "suv") {
    echo "Tipo de veiculo invalido." . PHP_EOL;
} else {
    // Valor por hora conforme o tipo
    if ($tipo == "moto") {
        $valorHora = 5;
    } elseif ($tipo == "carro") {
        $valorHora = 8;
    } else {
        $valorHora = 12;
    }

    // Calculos
    $subtotal = $valorHora * $horas;

    // Desconto para mais de 8 horas
    if ($horas > 8) {
        $percentual = 10;
    } else {
        $percentual = 0;
    }

    $desconto = $subtotal * $percentual / 100;
    $total = $subtotal - $desconto;

    // Saida
    echo PHP_EOL . "===== COMPROVANTE DO ESTACIONAMENTO =====" . PHP_EOL;
    echo "Atendimento: " . $numero . PHP_EOL;
    echo "Data: " . $data . PHP_EOL;
    echo "Cliente: " . $cliente . PHP_EOL;
    echo "Placa: " . $placa . PHP_EOL;
    echo "Tipo do veiculo: " . $tipo . PHP_EOL;
    echo "Horas: " . $horas . PHP_EOL;
    echo "Valor por hora: R$ " . number_format($valorHora, 2, ",", ".") . PHP_EOL;
    echo "Subtotal: R$ " . number_format($subtotal, 2, ",", ".") . PHP_EOL;
    echo "Desconto: " . $percentual . "%" . PHP_EOL;
    echo "Valor do desconto: R$ " . number_format($desconto, 2, ",", ".") . PHP_EOL;
    echo "Total final: R$ " . number_format($total, 2, ",", ".") . PHP_EOL;
}