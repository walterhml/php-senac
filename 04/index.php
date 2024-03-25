<?php

// float e boleanos

// numeros decimais (floats)
$altura = 1.75;
$peso = 75.4;

echo "altura: $altura metros - peso $peso quilogramas <br>";



// opereções com floats 
$preco_produto = 19.99;
$quantidade = 3;

$total = $preco_produto * $quantidade;
echo "total de compra de $quantidade itens do produto que custa $preco_produto $total <br>";

// boleanos
$tem_idade = true;
$tem_cartao = false;

$pode_entrar = $tem_idade && $tem_cartao;

echo "pode entrar na festa: " . ($pode_entrar ? "sim <br>" : "nao <br>");


#

$tem_passaporte = true;
$tem_visto = false;

$pode_viajar_exterior = $tem_passaporte || $tem_visto;

echo "pode viajar: " . ($pode_viajar_exterior ? "sim <br>" : "nao");


$tem_carteira_motorista = false;

$pode_dirigir = $tem_carteira_motorista;
echo "pode dirigir: " . ($pode_dirigir ? "sim <br>" : "nao <br>");
#


$eh_maior = 5 > 7;
echo "5 é maior que ? :" . ($eh_maior ? "sim <br>" : "nao <br>");

$eh_maior = 7 > 5;

if ($eh_maior){
    echo "resultado pela variavel <br>";
}


if (5 > 7){
    echo "resultado por comparação logica <br>";
}


if (true){
    echo "resultado HARD COded";
}















?>