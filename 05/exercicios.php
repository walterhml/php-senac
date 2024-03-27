<?php
  //  Exercício 1 - Acesso a Elementos:
  //  Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.

$array_qualquer = array("segunda-feira", "terca-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sabado", "domingo");
echo "o terceiro dia: " . $array_qualquer[2];

echo "<br>";


 //   Exercício 2 - Alteração de Elementos:
 //   Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro".

$array_2 = array("janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", 12);
echo "<br>";
$array_2[11] = "dezembro";
print_r($array_2);
echo "<br>";

 //   Exercício 3 - Adição de Elementos:
 //   Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array.

$vazio = [1, 2, 3, 4, 5];
$vazio[] = 6;
echo "<br>";
print_r($vazio);

echo "<br>";


  //  Exercício 4 - Percorrendo um Array:
 //   Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses.

 echo "<br>";
$nome_mes = array("janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");
foreach($nome_mes as $mes){
    echo $mes . " ";
}

echo "<br>";


  //  Exercício 5 - Contagem de Elementos:
  //  Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado.

  echo "<br>";
$dias_semana = [1, 2, 3, 4, 5];
echo "quantidade de elementos: " . count($dias_semana);

echo "<br>";

  //  Exercício 6 - Busca de Elemento:
  //  Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.
  echo "<br>";

$dias_semanas = [1, 2, 3, 4, 5, "sabado", 7];
echo "encontrar a posição do dia sabado: " . array_search("sabado", $dias_semanas);

echo "<br>";




   // Exercício 7 - Reversão de Array:
 //   Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.

 echo "<br>";

$number_one_teen = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r(array_reverse($number_one_teen));





?>