<?php
function calcularValorProducao($quantidade, $valorPorKg) {
    return $quantidade * $valorPorKg;
}


function classificarPorte($valorTotal) {
    if ($valorTotal < 5000) {
        return "PRODUÇÃO DE PEQUENO PORTE";
    } elseif ($valorTotal <= 19999.99) {
        return "PRODUÇÃO DE MÉDIO PORTE";
    } else {
        return "PRODUÇÃO DE GRANDE PORTE";
    }
}

$codigoColheita = rand(1000, 9999);

$dataAtual = date("d/m/Y");

$responsavel = readline("Nome do responsável: ");

$quantidadeCulturas = readline("Quantas culturas serão registradas? ");
$quantidadeCulturas = (int) $quantidadeCulturas;

$culturas = [];

for ($i = 1; $i <= $quantidadeCulturas; $i++) {
    echo PHP_EOL . "Cultura " . $i . ":" . PHP_EOL;

    $nome = readline("Nome da cultura: ");

    $quantidadeProduzida = readline("Quantidade produzida (kg): ");
    $quantidadeProduzida = (float) $quantidadeProduzida;

    $valorPorKg = readline("Valor estimado de venda por kg: ");
    $valorPorKg = (float) $valorPorKg;

    if ($quantidadeProduzida > 0 && $valorPorKg > 0) {

        $valorProducao = calcularValorProducao($quantidadeProduzida, $valorPorKg);
        $culturas[] = [
            "nome" => $nome,
            "quantidade" => $quantidadeProduzida,
            "valorKg" => $valorPorKg,
            "valorProducao" => $valorProducao
        ];

    } else {
        echo "Registro inválido, ignorado." . PHP_EOL;
    }
}


echo PHP_EOL . "===== CULTURAS CADASTRADAS =====" . PHP_EOL;

// foreach percorre cada cultura guardada dentro do array $culturas.
foreach ($culturas as $cultura) {
    echo "Nome: " . $cultura["nome"] . PHP_EOL;
    echo "Quantidade produzida: " . $cultura["quantidade"] . " kg" . PHP_EOL;
    echo "Valor por kg: R$ " . number_format($cultura["valorKg"], 2) . PHP_EOL;
    echo "Valor da produção: R$ " . number_format($cultura["valorProducao"], 2) . PHP_EOL;
    echo "-----------------------------" . PHP_EOL;
}
$quantidadeTotal = 0;
$valorTotal = 0;

foreach ($culturas as $cultura) {
    $quantidadeTotal = $quantidadeTotal + $cultura["quantidade"];
    $valorTotal = $valorTotal + $cultura["valorProducao"];
}

$porte = classificarPorte($valorTotal);

echo PHP_EOL . "===== RESUMO GERAL =====" . PHP_EOL;
echo "Código da colheita: " . $codigoColheita . PHP_EOL;
echo "Data: " . $dataAtual . PHP_EOL;
echo "Responsável: " . $responsavel . PHP_EOL;
echo "Quantidade de culturas válidas: " . count($culturas) . PHP_EOL;
echo "Quantidade total produzida: " . $quantidadeTotal . " kg" . PHP_EOL;
echo "Valor total estimado: R$ " . number_format($valorTotal, 2) . PHP_EOL;
echo "Classificação: " . $porte . PHP_EOL;