<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO




// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/
$numero = 5; // numero fornecido pelo usuario.
echo "Contagem Regressiva <br>";

// Solução com for
echo "Solução com for <br>";
for ($i = $numero; $i >= 0; $i--) {
    echo "Falta $i segundos <br>";
}
echo "<br>";

// Solução com while
echo "Solução com while <br>";
$i = $numero;
while ($i >= 0){
    echo "Falta $numero segundos <br>";
    $i--;
}
echo "<br>";
// Solução com do-while
echo "Solução com do-while <br>";
$i = $numero;
do {
    echo "Faltam $i segundos <br>";
    $i--;
} while ($i >= 0);


echo "<br>";
// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/

// Solução com For
$tabuada_numero = 7;

for ($i = 0; $i <= 10; $i++) {
   echo "$tabuada_numero X $i :" . $i * $tabuada_numero . "<br>";
}

echo "<br>";

// Solução com while

$i = 1;

while ($i <= 10) {
    echo "$tabuada_numero X $i :" . $i * $tabuada_numero . "<br>";
    $i++;
}

echo "<br>";
$i = 1;
do {
    echo "$tabuada_numero X $i :" . $i * $tabuada_numero . "<br>";
    $i++;
}while($i <= 10);

// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/



// Solução com for






// Solução com while
$anterior = 0;
$atual = 1;
$i = 2;

while($i < 15){
    $proximo = $anterior + $atual;
    echo "$proximo ";
    $anterior = $atual;
    $atual = $proximo;
    $i++;
}


?>