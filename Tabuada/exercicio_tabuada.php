<?php

$numero = readline("Informe um número: ");
$numero = (int) $numero;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo $numero . " x " . $i . " = " . $resultado . PHP_EOL;
}


