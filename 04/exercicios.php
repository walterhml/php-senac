<?php

   // FLOATS E BOOLEANOS

//  Exercício 1 - Índice de Massa Corporal (IMC):
//    Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura).
// Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.
$altura = 1.82;
$peso = 83.5;


$imc_count = $peso / ($altura * $altura);

if ($imc_count < 18.5){
echo "MAGREZA <br>";
}elseif ($imc_count = 18.5 || 24.9){
echo "NORMAL <br>";
}elseif ($imc_count = 25.0 || 29.9){
echo "SOBREPESO <br>";
}elseif ($imc_count > 30.0 || 39.9){
    echo "OBESIDADE <br>";
}



 //   Exercício 2 - Verificação de Pagamento:
 //   Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra.
 // Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra 
 //é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.

$saldo_conta = true;
$desejaFazerCompra = false;
$valor_compra = 500.09;
$saldo_disponivel = 500.00;

if ($valor_compra - $saldo_disponivel){
echo "COMPRA NAO EFETUADA, SALDO INSUFICIENTE";
}

//    Exercício 3 - Conversor de Temperatura:
//    Solicite ao usuário que insira uma temperatura em Celsius (float).
// Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. 
//Exiba o resultado da conversão.

$temp = 33.8;

$fahrenheit = ($temp * 9/5) + 32 . "<br>";

echo $fahrenheit;

//    Exercício 4 - Verificação de Acesso:
//    Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano).
// Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.
  

$eh_maior = true;
$possui_autorizacao = true;

if ($eh_maior = true && $possui_autorizacao = true){
    echo "Voce tem acesso ao conteudo restrito";
}   


//    Exercício 6 - Verificação de Números Primos:
//    Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.




?>