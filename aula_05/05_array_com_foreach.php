<?php 

$alunos = [];

$quantidade = (int) readline ("Quantos alunos você vai cadastrar? ");

for ( $i = 0; $i < $quantidade ; $i++){

    $nome = readline("Nome do Aluno:");
    $alunos[] = $nome;
}


echo "=========================================".PHP_EOL;
echo "Lista de alunos".PHP_EOL;
echo "=========================================".PHP_EOL;

foreach($alunos as $aluno){
    echo $aluno .PHP_EOL;
}
