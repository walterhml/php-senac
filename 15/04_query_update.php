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

$alt1 = "granola com chocolate";
$alt2 = 2;
$id = 6;

$my_update = "UPDATE itens_compra SET nome_produto = ?, quantidade = ? WHERE id = ?";
$stmt = $connection->prepare($my_update);


if ($stmt) {
    $stmt->bind_param("sii", $alt1, $alt2, $id);

    if ($stmt->execute()){
        echo "<h1>alterando itens do banco de dados por ID</h1>";
        echo "item atualizado com sucesso";
    }
    else {
        echo "erro ao atualizar o contato: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Erro na consulta preparada: " . $connection->error;
}



$connection->close();
?>