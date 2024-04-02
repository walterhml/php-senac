<?php


readline(STDOUT, "Quantidade de linhas da piramide: ");
$levels = (int) fgets(STDIN);


for ($i = 1; $i <= $levels; $i++) {
   
    for ($j = 1; $j <= $levels - $i; $j++) {
        echo " ";
    }

    
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }

    echo "\n";
}


for ($i = 1; $i <= 3; $i++) {
  
    for ($j = 1; $j <= $levels - 3; $j++) {
        echo " ";
    }

    
    for ($k = 1; $k <= 3; $k++) {
        echo "*";
    }

    echo "\n";
}

?>