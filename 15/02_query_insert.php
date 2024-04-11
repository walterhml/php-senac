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

$item = "granola";
$quantidade = 24;

$insert = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES (?, ?)";
$stmt = $connection->prepare($insert);

if ($stmt) {
    $stmt->bind_param("si", $item, $quantidade);

    if ($stmt->execute()) {
        echo "Contato inserido com sucesso.";
    } else {
        echo "Erro ao inserir o contato: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "erro na consulta preparada: " . $connection->error;
}



$connection->close();







?>