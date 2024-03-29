<?php

//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Desafio 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/

// Implementação da Verificação de Soma

$n1 = 24;
$n2 = 36;
$n3 = 45;

$sum = $n1 + $n2;
if ($sum == $n3){
    echo "Verificação para ver se soma se iguala ao terceiro numero: <br>";
} else {
    echo "O a soma não se iguala ao terceiro numero! Confira a soma e o terceiro numero $sum, terceiro numero: $n3";
}

echo "<br>";
echo "<br>";
// Desafio 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/

// Implementação do Cálculo do Quadrado

$numeroInt = 56;

$calc = $numeroInt * $numeroInt;
echo "O quadrado desse numero $numeroInt é: $calc <br>";

echo "<br>";


// Desafio 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/

// Implementação da Verificação de Paridade


$numParImpar = 5; 

if ($numParImpar % 2 == 0) {
    echo "O numero é par";
}else {
    echo "O numero é impar";
}

echo "<br>";

// Desafio 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/

// Implementação do Cálculo da Média

$s1 = 75;
$s2 = 98;
$s3 = 67;

$media = ($s1 + $s2 + $s3)/3;
echo "Exibindo a media dos numeros $s1, $s2 e $s3: $media<br>";


// Desafio 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/

// Implementação da Verificação de Múltiplo

$n1 = 125325;
$n2 = 53343;

echo ceil($n1/$n2);


//// Exercício 2: Números Primos em um Intervalo
/*
    Solicita dois números inteiros ao usuário (N e M, onde N < M) e exibe todos os números primos no intervalo de N a M.
*/

// Implementação de Números Primos em um Intervalo





//// Exercício 3: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/

// Implementação de Conversão de Horas em Minutos




/// Exercício 4: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/

// Implementação de Desenho de Pirâmide






//// Exercício 6: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/

// Implementação de Contagem de Dígitos em um Número




//// Exercício 7: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/

// Implementação de Verificação de Palíndromo




//// Exercício 8: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/

// Implementação de Ordenação de Números





//// Exercício 9: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/

// Implementação de Soma de Dígitos




//// Exercício 10: Geração de Sequência Numérica
/*
    Solicita ao usuário um número inteiro N e exibe os primeiros N números da sequência: 1, 3, 6, 10, 15, 21, ...
*/
// Implementação de Geração de Sequência Numérica























































?>