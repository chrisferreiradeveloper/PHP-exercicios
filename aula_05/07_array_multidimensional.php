<?php

$alunos = [
[  
"nome" => "Miriam", 
    "idade" => 15,
    "curso" => "ADS",
    "nota" => 8.5
],
[
"nome" => "Christian", 
    "idade" => 18,
    "curso" => "ADS",
    "nota" => 9
]
];

foreach ($alunos as $aluno){


echo "Nome:" . $aluno["nome"].PHP_EOL;
echo "idade:" . $aluno["idade"].PHP_EOL;
echo "curso:" . $aluno["curso"].PHP_EOL;
echo "nota:" . $aluno["nota"].PHP_EOL;
}