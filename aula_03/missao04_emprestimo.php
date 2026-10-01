<?php

// Geracao automatica do codigo da simulacao
$codigo = rand(1000, 9999);

// Entrada de dados
$cliente = readline("Nome do cliente: ");
$salario = (float) readline("Salario mensal: ");
$valorSolicitado = (float) readline("Valor do emprestimo: ");
$parcelas = (int) readline("Quantidade de parcelas: ");

// Validacoes (antes de qualquer calculo)
if ($salario <= 0) {
    echo "Salario invalido." . PHP_EOL;
} elseif ($valorSolicitado <= 0) {
    echo "Valor solicitado invalido." . PHP_EOL;
} elseif ($parcelas <= 0) {
    echo "Quantidade de parcelas invalida." . PHP_EOL;
} else {
    // Calculos (parcelas ja validadas, sem divisao por zero)
    $valorParcela = $valorSolicitado / $parcelas;
    $limite = $salario * 0.30;

    // Analise
    if ($valorParcela <= $limite) {
        $resultado = "EMPRESTIMO PRE-APROVADO";
    } else {
        $resultado = "EMPRESTIMO NAO APROVADO";
    }

    // Saida
    echo PHP_EOL . "===== SIMULACAO DE EMPRESTIMO =====" . PHP_EOL;
    echo "Codigo: " . $codigo . PHP_EOL;
    echo "Cliente: " . $cliente . PHP_EOL;
    echo "Salario: R$ " . number_format($salario, 2, ",", ".") . PHP_EOL;
    echo "Valor solicitado: R$ " . number_format($valorSolicitado, 2, ",", ".") . PHP_EOL;
    echo "Parcelas: " . $parcelas . PHP_EOL;
    echo "Valor da parcela: R$ " . number_format($valorParcela, 2, ",", ".") . PHP_EOL;
    echo "Limite da parcela: R$ " . number_format($limite, 2, ",", ".") . PHP_EOL;
    echo "Resultado: " . $resultado . PHP_EOL;
}