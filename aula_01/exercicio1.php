<?php

echo "===== SENAC TOUR =====\n";

echo "Nome do cliente: ";
$cliente = trim(fgets(STDIN));

echo "Cidade de origem: ";
$origem = trim(fgets(STDIN));

echo "Cidade de destino: ";
$destino = trim(fgets(STDIN));

echo "Quantidade de viajantes: ";
$viajantes = (int) trim(fgets(STDIN));

echo "Quantidade de dias: ";
$dias = (int) trim(fgets(STDIN));

echo "Valor da passagem por pessoa: ";
$passagem = (float) trim(fgets(STDIN));

echo "Valor da diaria: ";
$diaria = (float) trim(fgets(STDIN));

echo "Gasto diario com alimentacao por pessoa: ";
$alimentacao = (float) trim(fgets(STDIN));

echo "Transporte estimado por dia: ";
$transporte = (float) trim(fgets(STDIN));

echo "Valor do passeio por pessoa: ";
$passeio = (float) trim(fgets(STDIN));

$totalPassagens = $passagem * $viajantes;
$totalHospedagem = $diaria * $dias;
$totalAlimentacao = $alimentacao * $dias * $viajantes;
$totalTransporte = $transporte * $dias;
$totalPasseios = $passeio * $viajantes;

$totalViagem = $totalPassagens + $totalHospedagem + $totalAlimentacao + $totalTransporte + $totalPasseios;
$valorPorViajante = $totalViagem / $viajantes;

$numero = rand(1000, 9999);
$data = date("d/m/Y");

echo "\n===== ORCAMENTO DE VIAGEM =====\n";
echo "Numero do orcamento: " . $numero . "\n";
echo "Data: " . $data . "\n";
echo "Cliente: " . $cliente . "\n";
echo "Trajeto: " . $origem . " -> " . $destino . "\n";
echo "Quantidade de viajantes: " . $viajantes . "\n";
echo "Quantidade de dias: " . $dias . "\n";
echo "--------------------------------\n";
echo "Passagens: R$ " . number_format($totalPassagens, 2, ",", ".") . "\n";
echo "Hospedagem: R$ " . number_format($totalHospedagem, 2, ",", ".") . "\n";
echo "Alimentacao: R$ " . number_format($totalAlimentacao, 2, ",", ".") . "\n";
echo "Transporte: R$ " . number_format($totalTransporte, 2, ",", ".") . "\n";
echo "Passeios: R$ " . number_format($totalPasseios, 2, ",", ".") . "\n";
echo "--------------------------------\n";
echo "Total da viagem: R$ " . number_format($totalViagem, 2, ",", ".") . "\n";
echo "Valor por viajante: R$ " . number_format($valorPorViajante, 2, ",", ".") . "\n";
echo "================================\n";