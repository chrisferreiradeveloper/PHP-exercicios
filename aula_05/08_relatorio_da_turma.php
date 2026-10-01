<?php

// Cadastra 5 alunos e devolve o array com todos eles
function cadastrarAlunos()
{
    $alunos = [];

    for ($i = 1; $i <= 5; $i++) {
        echo "Aluno " . $i . PHP_EOL;
        $nome = readline("Nome: ");
        $nota = (float) readline("Nota: ");

        $alunos[] = ["nome" => $nome, "nota" => $nota];
    }

    return $alunos;
}

// Mostra o relatorio linha por linha
function listarAlunos($alunos)
{
    echo PHP_EOL . "===== RELATORIO =====" . PHP_EOL;

    foreach ($alunos as $aluno) {
        if ($aluno["nota"] >= 7) {
            $situacao = "APROVADO";
        } else {
            $situacao = "REPROVADO";
        }

        echo $aluno["nome"] . " - " . number_format($aluno["nota"], 1, ".", "") . " - " . $situacao . PHP_EOL;
    }
}

// Media da turma
function calcularMedia($alunos)
{
    $soma = 0;

    foreach ($alunos as $aluno) {
        $soma = $soma + $aluno["nota"];
    }

    return $soma / count($alunos);
}

// Conta quem tem nota 7 ou mais
function contarAprovados($alunos)
{
    $total = 0;

    foreach ($alunos as $aluno) {
        if ($aluno["nota"] >= 7) {
            $total++;
        }
    }

    return $total;
}

// Conta quem tem nota abaixo de 7
function contarReprovados($alunos)
{
    $total = 0;

    foreach ($alunos as $aluno) {
        if ($aluno["nota"] < 7) {
            $total++;
        }
    }

    return $total;
}

// Mostra o resumo final
function mostrarResumo($media, $aprovados, $reprovados)
{
    echo PHP_EOL;
    echo "Quantidade de alunos: " . ($aprovados + $reprovados) . PHP_EOL;
    echo "Aprovados: " . $aprovados . PHP_EOL;
    echo "Reprovados: " . $reprovados . PHP_EOL;
    echo "Media da turma: " . number_format($media, 2, ",", ".") . PHP_EOL;
}

// Programa principal
$alunos = cadastrarAlunos();
listarAlunos($alunos);
$media = calcularMedia($alunos);
$aprovados = contarAprovados($alunos);
$reprovados = contarReprovados($alunos);
mostrarResumo($media, $aprovados, $reprovados);