<?php
// estrutura condicionais em php

$numero = 10;
if ($numero > 5){
    echo "o numero é maior que 5. <br>";
} else {
    echo "o numero é menor ou igual a 5. <br>";
}

// exemplo 2: IF-ELSEIF-ELSE

$hora = date("H"); // pega a hora atual do sistema
if ($hora < 10){
    echo "bom dia! <br>";
} elseif($hora < 19) {
    echo "boa tarde! <br>";
} else {
    echo "boa noite!";
}



# exemplo 3: operador Ternario
$idade = 18;
$mensagem = ($idade >= 18) ? "maior de idade" : "menor de idade";
echo "MENSAGEM: " . $mensagem . "<br>";


// exemplo 4: switch-case
$dia_semana = date("D");
switch ($dia_semana) {
    case "Mon":
        echo "Hoje é segunda-feira. <br>";
        break;
    case "Tue":
        echo "Hoje é terça-feira. <br>";
        break;
    case "Wed":
        echo "Hoje é quarta-feira. <br>";
        break;
    case "Thu":
        echo "Hoje é quinta-feira. <br>";
        break;
    case "Fri":
        echo "Hoje é sexta-feira. <br>";
        break;
    case "Sat":
        echo "Hoje é sábado. <br>";
        break;
    case "Sun":
        echo "Hoje é domingo. <br>";
        break;
    default:
        echo "Erro ao obter o dia da semana. <br>";
}
























?>