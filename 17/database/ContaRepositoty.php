<?php
require_once 'DatabaseRepository.php';

class ContaRepository {

    public static function getAllContas() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM conta");

        $contas = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $contas[] = $row;
            }
        }
        $connection->close();
        return $contas;
    }

    public static function getContaById($id) {
        $connection = DatabaseRepository::connect();
        $sql = "SELECT * FROM conta WHERE id = $id";
        $result = $connection->query($sql);

        $cliente = null;
        if($result->num_rows > 0) {
            $cliente = $result->fetch_assoc();
        }
        $connection->close();
        return $cliente;
    }

    public static function insertConta($id, $cliente_id, $numero, $saldo, $tipo, $limite_cheque_especial, $taxa_rendimento) {
        $connection = DatabaseRepository::connect();
        $sql = "INSERT INTO conta (id, cliente_id, numero, saldo, tipo, limite_cheque_especial, taxa_rendimento) VALUES ($id, $cliente_id, $numero, $saldo, '$tipo', $limite_cheque_especial, $taxa_rendimento)";
        $sucess = $connection->query($sql);
        $connection->close();
        return $sucess;
    }

    public static function updateConta($id, $cliente_id, $numero, $saldo, $tipo, $limite_cheque_especial, $taxa_rendimento) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("UPDATE conta SET (id, cliente_id, numero, saldo, tipo, limite_cheque_especial, taxa_rendimento) VALUES ($id, $cliente_id, $numero, $saldo, '$tipo', $limite_cheque_especial, $taxa_rendimento)");
        $sucess = $connection->query($result);
        $connection->close();
        return $sucess;
    }

    public static function deleteConta($id) {
        $connection = DatabaseRepository::connect();
        $sql = "DELETE FROM conta WHERE id = $id;";
        $result = $connection->query($sql);
        $connection->close();
        return $result;
    }














}




































?>