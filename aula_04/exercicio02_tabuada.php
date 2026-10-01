<?php

// Entrada de dados
$numero = (int) readline("Informe um numero para a tabuada: ");

// Repeticao com quantidade conhecida: 10 vezes
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo $numero . " x " . $i . " = " . $resultado . PHP_EOL;
}