<?php

// introdução a arreys em php

// definition de arrays
$frutas = array("Maça", "Banana", "Laranja", "Morango", "maça");

$numero = [1, 2, 3, 4, 5];

$alunos = array("joao" => 18, "maria" => 20, "pedro" => 19);

// acessando elementos do array
echo "A segunda Fruta é: " . $frutas[0] . "<br>";
echo "o terceiro numero; " . $numero[2] . "<br>";
echo "a idade do joao é: " . $alunos["joao"] . " anos" . "<br>";


// alterar elementos do array
$frutas[0] = "pera";
$numero[4] = 10;
$alunos["maria"] = 21;


// adicionando elementos ao array
$frutas[] = "abacaxi";
$numero[] = 6;
$alunos["ana"] = 22;


// percorrendo um array com o foreach
echo "lista de frutas: ";
foreach($frutas as $fruta){
    echo $fruta . " ";
}

echo "<br>";

foreach($numero as $numeross){
    echo $numeross . " ";
}

echo "<br>";

echo "lista de alunos: <br>";

foreach($alunos as $nome => $idade){
echo $nome . " tem " . $idade . " anos ";
echo "<br>";
}


// Funções uteis para arrays
echo "numeros de elementos no array de frutas: " . count($frutas) . "<br>";

echo "Indice da fruta 'laranja' no array: " . array_search('Laranja', $frutas). "<br>";

echo "ultima fruta do array: " . end($frutas) . "<br>";

print_r($frutas) . "<br>";
echo "<br>";

echo "array de frutas depois de reverter";
$frutas_revertidas = array_reverse($frutas);
print_r($frutas_revertidas);























?>