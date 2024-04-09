<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'contatos');


// conecta a aplicação ao banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// query para selecionar contatos
$consulta = "SELECT * FROM contato_info";

// executa a query e amarzena o resultado em uma variavel
$result = $connection->query($consulta);

// exibe os resultados em tela
print_r($result);



// fecha a conexão
$connection->close();














?>