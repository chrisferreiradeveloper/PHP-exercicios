<?php

// Entrada de dados
$numero = (int) readline("Informe um numero: ");

// Validacao
if ($numero <= 0) {
    echo "Numero invalido. Informe um valor maior que zero." . PHP_EOL;
} else {
    // Acumulador comeca em zero
    $soma = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $soma = $soma + $i;
    }

    echo "A soma de 1 ate " . $numero . " e " . $soma . "." . PHP_EOL;
}