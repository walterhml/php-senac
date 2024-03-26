<?php

// introdução a arreys em php

// definition de arrays
$frutas = array("Maça", "Banana", "Laranja", "Morango", "maça");

$numero = [1, 2, 3, 4, 5];

$alunos = array("joao" => 18, "maria" => 20, "pedro" => 19);

// acessando elementos do array
echo "A segunda Fruta é: " . $frutas[0] . "<br>";
echo "o terceiro numero; " . $numero[2] . "<br>";
echo "a idade do joao é: " . $alunos["joao"] . " anos";


// alterar elementos do array
$frutas[0] = "pera";
$numeros[4] = 10;
$alunos["maria"] = 21;


// adicionando elementos ao array
$frutas[] = "abacaxi";
$numero[] = 6;
$aluno["ana"] = 22;


// percorrendo um array com o foreach













?>