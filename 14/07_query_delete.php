<?php
// Definindo constantes para a conexão com o banco de dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'contatos');

// Criar uma conexão com o banco de dados
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificando se ocorreu algum erro de conexão
if($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

$id = 5; // id com registro que sera excluido

// query para excluir um contato (utilizando consulta preparada)
$meu_delete = "DELETE FROM contatos_info WHERE id = ?";
$stmt = $connection->prepare($meu_delete);

    if($stmt) {
    // Associa o parametro a consulta preparada
    $stmt->bind_param("i", $id);

    // Execultar a consulta
   if($stmt->execute()) {
        echo "Contato de id $id excluido com sucesso.";
   } else {
    echo "Error ao excluir o contato de id $id: " . $stmt->error;
   }

    $stmt->close();

} else {
    echo "Erro na consulta preparada " . $connection->error;
}






$connection->close();
?>