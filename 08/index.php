<?php

// estruturas de repetição em php

// exemplo 1: for

echo "exemplo do for <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Numeoro $i <br>";
}

echo "<br>";


// exemplo 2: while 

$contador = 1;
echo "EXEMPLO 2 : WHILE <br>";
while ($contador <= 5) {
    echo "numero $contador <br>";
    $contador++;
}

echo "<br>";

// exemplo 3: do while
echo "EXEMPLO 3 : DO WHILE <br>";

$cont_do = 1;

do {
    echo "Numero: $cont_do <br>";
    $cont_do++;
}while($cont_do <= 5);

echo "<br>";


// exemplo 4 foreach
echo "exemplo 4 foreach <br>";
$array_vogais = ["a", "b", "e", "i", "o", "u"];
foreach($array_vogais as $vogal){
    echo "Vogal: $vogal <br>";
}

echo "<br>";
// exemplo 5: break e continue
echo "exemplo 5: break e continue <br>";

for ($i = 0; $i < 10; $i++) {
    echo "Numero $i <br>";
    if ($i == 3) {
        continue;
    }
    if ($i == 8) [
        break;
    ]
}

?>