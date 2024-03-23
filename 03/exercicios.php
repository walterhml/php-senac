<?php
 //   Exercício 1 - Soma:
 //   Declare duas variáveis contendo números inteiros e exiba a soma dos dois números.

$n1 = 20;
$n2 = 30;
$soma = $n1 + $n2;
echo $soma;
echo "<br>";

  //  Exercício 2 - Subtração:
  //  Declare duas variáveis contendo números inteiros e exiba a diferença entre eles.
$n1 = 20;
$n2 = 30;
$sub = $n1 - $n2;

echo $sub;
echo "<br>";
 //   Exercício 3 - Multiplicação:
 //   Declare duas variáveis contendo números inteiros e exiba o produto dos dois números.
$nu1 = 20;
$nu2 = 30;
$mult = $nu1 * $nu2;

echo $mult;
echo "<br>";
  //  Exercício 4 - Divisão:
 //   Declare duas variáveis contendo números inteiros e exiba o resultado da divisão do primeiro pelo segundo.

$n1 = 65;
$n2 = 22;

$div = $n1 / $n2;
echo $div;
echo "<br>";

  //  Exercício 5 - Módulo (Resto da Divisão):
  //  Declare duas variáveis contendo números inteiros e exiba o resto da divisão do primeiro pelo segundo.

$n1 = 20;
$n2 = 2;

$mod = $n1 % $n2;
echo $mod;


echo "<br>";
  //  Exercício 6 - Incremento e Decremento:
  //  Declare uma variável contendo um número inteiro. Em seguida, incremente o valor dessa variável em 1 e exiba o resultado. Depois, decremente o valor da variável em 1 e exiba o resultado.

$n1 = 54;
$n1++;
echo $n1;
echo "<br>";
$n2 = 56;
$n2--;
echo $n2;
echo "<br>";
  //  Exercício 7 - Operadores de Comparação:
  //  Declare duas variáveis contendo números inteiros e utilize operadores de comparação para determinar se o primeiro número é igual, diferente, maior, menor, maior ou igual ou menor ou igual ao segundo número. Exiba o resultado de cada comparação.

$n1 = 58;
$n2 = 59;

echo "igual : ";
echo $n1 == $n2 ? "Verdadeiro" : "Falso <br>";
echo "<br>";
echo "diferente: ";
echo $n2 != $n1 ? "Verdadeiro" : "Falso <br>";
echo "<br>";
echo "maior: ";
echo $n1 > $n2 ? "verdadeiro" : "falso <br>";
echo "<br>";
echo "menor: ";
echo $n1 < $n2 ? "verdadeiro" : "falso <br>";
echo "<br>";
echo "menor ou igual: ";
echo $n1 <= $n2 ? "verdadeiro" : "falso <br>";
echo "<br>";
echo "maior ou igual ";
echo $n1 >= $n2 ? "verdadeiro" : "falso <br>";


  ?>