<?php
// Definindo constantes para a conexão com o banco de dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lista_compras');

// Criar uma conexão com o banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificando se ocorreu algum erro de conexão
if($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

// fazendo consulta basica 
$consulta = "SELECT * FROM itens_compra";

$resultado = $connection->query($consulta);

while($row = $resultado->fetch_assoc()) {
    echo "Nome: " . $row["nome_produto"] . " - Quantidade: " . $row["quantidade"] . " - ";
    if ($row["comprado"] == true) {
        echo "sim <br>";
    } else {
    echo "nao <br>";
}
}



$connection->close();




?>