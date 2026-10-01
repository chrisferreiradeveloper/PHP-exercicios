<?php

// Entrada de dados
$aluno = readline("Nome do aluno: ");
$nota1 = (float) readline("Primeira nota: ");
$nota2 = (float) readline("Segunda nota: ");
$frequencia = (float) readline("Frequencia (0 a 100): ");

// Validacao antes de qualquer calculo
if ($nota1 < 0 || $nota1 > 10 || $nota2 < 0 || $nota2 > 10) {
    echo "Notas invalidas. Informe valores entre 0 e 10." . PHP_EOL;
} elseif ($frequencia < 0 || $frequencia > 100) {
    echo "Frequencia invalida. Informe um valor entre 0 e 100." . PHP_EOL;
} else {
    // Calculo da media
    $media = ($nota1 + $nota2) / 2;

    // Frequencia vem primeiro: media alta nao salva quem faltou demais
    if ($frequencia < 75) {
        $situacao = "REPROVADO POR FREQUENCIA";
    } elseif ($media >= 7) {
        $situacao = "APROVADO";
    } elseif ($media >= 4) {
        $situacao = "RECUPERACAO";
    } else {
        $situacao = "REPROVADO POR NOTA";
    }

    // Saida
    echo PHP_EOL . "===== SITUACAO ACADEMICA =====" . PHP_EOL;
    echo "Aluno: " . $aluno . PHP_EOL;
    echo "Nota 1: " . number_format($nota1, 2, ",", ".") . PHP_EOL;
    echo "Nota 2: " . number_format($nota2, 2, ",", ".") . PHP_EOL;
    echo "Media: " . number_format($media, 2, ",", ".") . PHP_EOL;
    echo "Frequencia: " . $frequencia . "%" . PHP_EOL;
    echo "Situacao: " . $situacao . PHP_EOL;
}