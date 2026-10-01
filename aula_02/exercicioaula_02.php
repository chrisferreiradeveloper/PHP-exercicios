<?php

$numero = rand(1000, 9999);
$data = date("d/m/Y");

echo "===== AUTOTECH - ORCAMENTO DE SERVICO =====\n";

echo "Nome do cliente: ";
$cliente = trim(fgets(STDIN));

echo "Telefone: ";
$telefone = trim(fgets(STDIN));

echo "Modelo do veiculo: ";
$modelo = trim(fgets(STDIN));

echo "Marca: ";
$marca = trim(fgets(STDIN));

echo "Ano: ";
$ano = (int) trim(fgets(STDIN));

echo "Placa: ";
$placa = trim(fgets(STDIN));

echo "Quilometragem atual: ";
$km = (int) trim(fgets(STDIN));

echo "Descricao do servico: ";
$servico = trim(fgets(STDIN));

echo "Valor da hora de mao de obra: ";
$valorHora = (float) trim(fgets(STDIN));

echo "Quantidade de horas previstas: ";
$horas = (int) trim(fgets(STDIN));

echo "Nome da peca: ";
$peca = trim(fgets(STDIN));

echo "Valor unitario da peca: ";
$valorPeca = (float) trim(fgets(STDIN));

echo "Quantidade de pecas: ";
$quantidadePecas = (int) trim(fgets(STDIN));

echo "Materiais adicionais: ";
$materiais = (float) trim(fgets(STDIN));

$maoDeObra = $valorHora * $horas;
$custoPecas = $valorPeca * $quantidadePecas;
$total = $maoDeObra + $custoPecas + $materiais;
$parcela = $total / 3;

echo "\n===== COMPROVANTE DE ORCAMENTO =====\n";
echo "Orcamento: " . $numero . "\n";
echo "Data: " . $data . "\n";
echo "------------------------------------\n";
echo "Cliente: " . $cliente . "\n";
echo "Telefone: " . $telefone . "\n";
echo "------------------------------------\n";
echo "Veiculo: " . $marca . " " . $modelo . "\n";
echo "Ano: " . $ano . "\n";
echo "Placa: " . $placa . "\n";
echo "Quilometragem: " . $km . " km\n";
echo "------------------------------------\n";
echo "Servico: " . $servico . "\n";
echo "Mao de obra: R$ " . number_format($maoDeObra, 2, ",", ".") . "\n";
echo "Pecas (" . $peca . "): R$ " . number_format($custoPecas, 2, ",", ".") . "\n";
echo "Materiais adicionais: R$ " . number_format($materiais, 2, ",", ".") . "\n";
echo "------------------------------------\n";
echo "Valor total: R$ " . number_format($total, 2, ",", ".") . "\n";
echo "3 parcelas de R$ " . number_format($parcela, 2, ",", ".") . "\n";
echo "====================================\n";