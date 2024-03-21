<?php

echo '<h1>ola Mundo!</h1>';

// isso é um comentario
# isso tambem é um comentario

/*
comentario de varias linhas
*/

// declaração de variaveis
$nome = 'joao';
$sobrenome = 'silva';
$nome_comleto = $nome . " " . $sobrenome;

//echo $nome;
//echo $sobrenome;

echo $nome . " " . $sobrenome . "<br>";
echo $nome_comleto . '<br>';

// variaveis numericas
$idade = 25 . '<br>';
$ano = 2024 . '<br>';

echo $idade;
echo $ano - $idade;

echo 'esse é um texto em aspas simples <br>';
echo "esse é um texto com aspas duplas <br>";

//trabalhando  com aspas simples e duplas
echo 'dom pedro disse: "independencia ou morte! <br>';

echo "$nome tem $idade anos de idade <br>";
echo '$nome tem $idade anos de idade <br>';

?>