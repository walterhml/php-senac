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

$get_id = 6;

$sql = "SELECT * FROM itens_compra WHERE id = ?";
$stmt = $connection->prepare($sql);

if($stmt) {
    $stmt->bind_param("i", $get_id);

    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo "<h1>Trazendo dados com ID</h1>";
        echo "ID: " . $row["id"] . "<br>";
        echo "Nome: " . $row["nome_produto"] . "<br>";
        echo "Quantidade: " . $row["quantidade"] . "<br>";
        echo "<hr>";
    } else {
        echo "Nenhum registro encontrado.";
    }

    $stmt->close();
} else {
    echo "Erro na consulta preparda: " . $connection->error;
}

$connection->close();

?>