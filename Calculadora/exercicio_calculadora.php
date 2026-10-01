<?php

$num1 = readline("Primeiro número: ");
$num1 = (float) $num1;

$num2 = readline("Segundo número: ");
$num2 = (float) $num2;

$operacao = readline("Operação: ");

if ($operacao == "+") {
    $resultado = $num1 + $num2;
    echo $num1 . " + " . $num2 . " = " . $resultado . PHP_EOL;

} elseif ($operacao == "-") {
    $resultado = $num1 - $num2;
    echo $num1 . " - " . $num2 . " = " . $resultado . PHP_EOL;

} elseif ($operacao == "*") {
    $resultado = $num1 * $num2;
    echo $num1 . " * " . $num2 . " = " . $resultado . PHP_EOL;

} elseif ($operacao == "/") {
    if ($num2 != 0) {
        $resultado = $num1 / $num2;
        echo $num1 . " / " . $num2 . " = " . $resultado . PHP_EOL;
    } else {
        echo "Operação não pode ser realizada: divisão por zero." . PHP_EOL;
    }

} else {
    echo "Operação inválida." . PHP_EOL;
}