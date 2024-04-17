<?php

class DatabaseRepository {
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'lista_compras';
    private $connection;
    
    public function __construct() {
        $this->connection = new mysqli(
            $this->server, 
            $this->username, 
            $this->password, 
            $this->database);

        if($this->connection->connect_errno) {
            die("Erro na conexão: " . $this->connection->connect_error);
        }
    }

    public function getAllItems() {
        $sql = "SELECT * FROM itens_compra";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all();
        $stmt->close();
        return $items;
    }

    public function addItem($nome_produto, $quantidade) {
        $sql = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES (?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("si", $nome_produto, $quantidade);
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }

    public function updateItem($id, $nome_produto, $quantidade, $comprado) {
        $sql = "UPDATE itens_compra SET nome_produto = ?, quantidade = ?, comprado = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("siii", $nome_produto, $quantidade, $comprado, $id);
        $sucess = $stmt->execute();
        $stmt->close();
        return $sucess;
    }

    public function deleteItem($id) {
        $sql = "DELETE FROM itens_compra WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $sucess = $stmt->execute();
        $stmt->close();
        return $sucess;
    }

    public function __destruct() {
        $this->connection->close();
    }
}

?>