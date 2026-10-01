<?php

// Entrada de dados
$nome = readline("Nome: ");
$idade = (int) readline("Idade: ");

// Classificacao (a ordem das condicoes importa)
if ($idade <= 0) {
    $classificacao = "IDADE INVALIDA";
} elseif ($idade < 12) {
    $classificacao = "CRIANCA";
} elseif ($idade <= 17) {
    $classificacao = "ADOLESCENTE";
} elseif ($idade <= 59) {
    $classificacao = "ADULTO";
} else {
    $classificacao = "IDOSO";
}

// Saida
echo PHP_EOL . "===== CLASSIFICACAO ETARIA =====" . PHP_EOL;
echo "Nome: " . $nome . PHP_EOL;
echo "Idade: " . $idade . PHP_EOL;
echo "Classificacao: " . $classificacao . PHP_EOL;