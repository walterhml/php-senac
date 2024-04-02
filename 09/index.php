<?php


function nomeDafuncao(){
    // bloco de codigo da função
}

// declaração de função sem parametros e sem retorno
function saudacao(){
    echo "ola tll04 <br>";
}


saudacao(); // chamada da função





// declaração de função que retorna um valor
function saudacao_retorno(){
    return "ola TI04 <br>";
}
echo saudacao_retorno();


// declaraçao de uma função que recebe parametro
function saudacao_parametro($nome){
    echo "ola, $nome& <br>";
}
saudacao_parametro("TI04");


// função soma com parametro

function saudacao_parametro_retorno($nome){
    return "ola, $nome* <br>";
}
echo saudacao_parametro_retorno("TI04");



// declaração de uma função que recebe dois parametros de um retorno 

function soma($a, $b){
    return $a + $b;
}

$resultado = soma(8, 16);
echo "A soma de 8 com 16 é: " . $resultado . "<br>";


// escopo das variaveis!!!
$mensagem = "ola <br>"; // variavel global

function mostrar_mensagem() {
    $mensagem = "mundo! <br>"; // variavel local
    echo $mensagem; // saida mundo
}

mostrar_mensagem();
echo $mensagem; // saida ola


















?>