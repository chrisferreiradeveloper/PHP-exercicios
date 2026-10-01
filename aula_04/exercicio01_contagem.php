<?php

// Entrada de dados
$numero = (int) readline("Informe um numero: ");

// Validacao
if ($numero <= 0) {
    echo "Numero invalido. Informe um valor maior que zero." . PHP_EOL;
} else {
    // Contador comeca em 1 e para quando passa do numero informado
    $contador = 1;

    while ($contador <= $numero) {
        echo $contador . PHP_EOL;
        $contador++;
    }
}