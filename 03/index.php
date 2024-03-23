<?php
// numeros e operadores
$numero1 = 10;
$numero2 = 5;
echo "Valor A é: $numero1 e Valor B é: $numero2 <br>";
// soma
$soma = $numero1 + $numero2;
echo "Soma $soma <br>";
// subtração
$subtracao = $numero1 - $numero2;
echo "Subtração $subtracao <br>";

// multiplicação
$multiplicacao = $numero1 * $numero2;
echo "Multiplicação $multiplicacao <br>";
// divisão

$divisao = $numero1 / $numero2;
echo "Divisão $divisao <br>";


// modulo (resto da divisao)
$modulo = $numero1 % $numero2;
echo "modulo $modulo <br>";


// operação de incremento e decremento
$num = 5;
echo "valor base para incremento e decremento = $num <br>";

// incremento
$num++;
echo "incremento $num <br>";

// decremento
$num--;
echo "Decremento $num <br>";


// operadores de comparação
$num1 = 10;
$num2 = 5;

// igualdade
echo "igual a: ";
echo $num1 == $num2 ? "Verdadeiro" : "Falso <br>";


// diferente
echo "diferente de: ";
echo $num1 != $num2 ? "verdadeiro <br>" : "falso <br>";

// maior que 
echo "Maior que: ";
echo $num1 > $num2 ? "veidadeiro <br>" : "falso <br>";

// menor que 
echo "menor que: ";
echo $num1 < $num2 ? "verdadeiro <br>" : "falso <br>";

echo "<hr>";
// operadores logicos 

// e logico (AND)
echo "verdadeiro e verdadeiro: ";
echo true && true ? "verdadeiro <br>" : "falso <br>";

echo "verdadeiro e falso: ";
echo true && false ? "verdadeiro <br>" : "falso <br>";

echo "falso e Verdadeiro: ";
echo false && true ? "verdadeiro <br>" : "falso <br>";

echo "falso e falso: ";
echo false && false ? "verdadeiro <br>" : "falso <br>";

echo "<hr>";

// ou logico (OR)

echo "verdadeiro e verdadeiro: ";
echo true || true ? "verdadeiro <br>" : "falso <br>";

echo "verdadeiro e falso: ";
echo true || false ? "verdadeiro <br>" : "falso <br>";

echo "falso e Verdadeiro: ";
echo false || true ? "false <br>" : "verdadeiro <br>";

echo "falso e falso: ";
echo false || false ? "false <br>" : "false <br>";


 
// nao logico (NOT);
echo "negando algo que é verdadeiro: ";
echo !true ? "verdadeiro <br>" : "false <br>";














?>