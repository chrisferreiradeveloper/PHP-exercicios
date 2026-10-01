<?php

// Entrada da quantidade de alunos
$quantidade = (int) readline("Quantidade de alunos: ");

if ($quantidade <= 0) {
    echo "Quantidade invalida." . PHP_EOL;
} else {
    // Acumulador e contadores
    $soma = 0;
    $aprovados = 0;
    $reprovados = 0;
    $maior = 0;
    $menor = 0;

    // Uma repeticao para cada aluno
    for ($i = 1; $i <= $quantidade; $i++) {
        $nome = readline("Nome: ");
        $nota = (float) readline("Nota: ");

        $soma = $soma + $nota;

        // Na primeira repeticao, maior e menor recebem a primeira nota
        if ($i == 1) {
            $maior = $nota;
            $menor = $nota;
        } else {
            if ($nota > $maior) {
                $maior = $nota;
            }
            if ($nota < $menor) {
                $menor = $nota;
            }
        }

        // Aprovados e reprovados
        if ($nota >= 7) {
            $aprovados++;
        } else {
            $reprovados++;
        }
    }

    // Media calculada ao final
    $media = $soma / $quantidade;

    echo PHP_EOL;
    echo "Media da turma: " . number_format($media, 2, ",", ".") . PHP_EOL;
    echo "Maior nota: " . number_format($maior, 2, ",", ".") . PHP_EOL;
    echo "Menor nota: " . number_format($menor, 2, ",", ".") . PHP_EOL;
    echo "Aprovados: " . $aprovados . PHP_EOL;
    echo "Reprovados: " . $reprovados . PHP_EOL;
}