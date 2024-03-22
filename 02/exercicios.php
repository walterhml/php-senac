<?php

 //   Exercício 1 - Concatenação de Strings:
  //  Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".
$firstvar = "Walter";
$nameprofession = "QA enginner";

echo "O ".$firstvar." é ".$nameprofession;
echo "<br>";


  //  Exercício 2 - Comprimento de uma String:
  //  Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.
$password = 'Root@123';
if (strlen($password) > 8){
   echo "A senha é valida";
}else {
    echo "error";
}


echo "<br>";

 //   Exercício 3 - Substituição de Caracteres:
 //   Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.
$phrase = "o walter sabe falar english fluente!";

$newphrase = str_replace("walter", "cachorro", $phrase);

echo $newphrase;

echo "<br>";
 //   Exercício 4 - Conversão de Case:
  //  Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.

$palavra = 'engginer';
echo strtoupper($palavra);

echo "<br>";
  //  Exercício 5 - Remoção de Espaços em Branco:
  //  Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.

  $url = "    https://translate.google.com.br/?hl=pt-BR&sl=auto&tl=en&text=frase&op=translate   ";
  echo trim($url);

  echo '<br>';
  //  Exercício 6 - Posição da Primeira Ocorrência:
  //  Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.
$listaCompras = "carro, joia, relogio, bone";
$posi = strpos($listaCompras, "carro");

echo $posi;
echo '<br>';
   // Exercício 7 - Inversão de uma String:
   // Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.

$palavra = 'ola';
echo strrev($palavra);

?>