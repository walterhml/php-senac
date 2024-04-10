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

// criação dos dados para a inserção
$nome = "walter";
$telefone = "987654321";
$email = "fulano@mail.com";

// query para inserir um contato (ultilizando uma consulta preparada)
$meu_insert = "INSERT INTO contatos_info (nome, telefone, email) VALUES (?, ?, ?)";
$stmt = $connection->prepare($meu_insert);

// Verifica se a consulta preparada foi bem-sucedida
if ($stmt) {
    // Associa os parâmetros à consulta preparada
    $stmt->bind_param("sss", $nome, $telefone, $email);

    // Executa a consulta
    if ($stmt->execute()) {
        echo "Contato inserido com sucesso.";
    } else {
        echo "Erro ao inserir o contato: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "erro na consulta preparada: " . $connection->error;
}

// fecha a conexão com o banco de dados
$connection->close();










?>