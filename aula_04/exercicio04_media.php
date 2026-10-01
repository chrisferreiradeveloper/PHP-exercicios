<?php

// Contador e acumulador
$quantidade = 0;
$soma = 0;

// Leitura do primeiro valor
$numero = (float) readline("Informe um numero (0 para encerrar): ");

// O zero encerra o programa e nao entra nos calculos
while ($numero != 0) {
    $quantidade++;
    $soma = $soma + $numero;

    $numero = (float) readline("Informe um numero (0 para encerrar): ");
}

// Media somente se pelo menos um valor foi informado
if ($quantidade > 0) {
    $media = $soma / $quantidade;

    echo PHP_EOL;
    echo "Quantidade de valores: " . $quantidade . PHP_EOL;
    echo "Soma: " . number_format($soma, 2, ",", ".") . PHP_EOL;
    echo "Media: " . number_format($media, 2, ",", ".") . PHP_EOL;
} else {
    echo "Nenhum valor foi informado." . PHP_EOL;
}