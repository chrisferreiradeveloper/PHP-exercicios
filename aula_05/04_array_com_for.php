<?php 

$alunos = [];

$quantidade = (int) readline ("Quantos alunos você vai cadastrar? ");

for ( $i = 0; $i < $quantidade ; $i++){

    $nome = readline("Nome do Aluno:");
    $alunos[] = $nome;
}


echo $alunos;