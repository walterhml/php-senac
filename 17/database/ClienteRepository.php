<?php
require_once 'DatabaseRepository.php';

class ClienteRepository {
    public static function getAllClientes() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM cliente");
        
        $cliente = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $cliente[] = $row;
            }
        }
        $connection->close();
        return $cliente;

    }

    public static function getClienteById($id) {
        $connection = DatabaseRepository::connect();
        $sql = 'SELECT * FROM Cliente WHERE id = $id';
        $result = $connection->query($sql);

        $id_cliente = null;
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $id_cliente[] = $row;
            }
            $connection->close();
            return $id_cliente;
        }

    }


}
?>