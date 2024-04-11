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

$id_excluido = 9; 

$meu_delete = "DELETE FROM itens_compra WHERE id = ?";
$stmt = $connection->prepare($meu_delete);

    if($stmt) {
    // Associa o parametro a consulta preparada
    $stmt->bind_param("i", $id_excluido);
        echo "<h1>Excluindo itens por ID</h1>";
    // Execultar a consulta
   if($stmt->execute()) {
        echo "Item de id $id_excluido excluido com sucesso.";
   } else {
    echo "Error ao excluir o Item de id $id_excluido: " . $stmt->error;
   }

    $stmt->close();

} else {
    echo "Erro na consulta preparada " . $connection->error;
}

$connection->close();
?>