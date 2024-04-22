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
        $result = $connection->query("SELECT * FROM conta WHERE id = $id");

        $contas = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $contas[] = $row;
            }
        }
    }

    public static function insertConta($id, $cliente_id, $numero, $saldo, $tipo, $limite_cheque_especial, $taxa_rendimento) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("UPDATE conta SET (id, cliente_id, numero, saldo, tipo, limite_cheque_especial, taxa_rendimento) VALUES ($id, $cliente_id, $numero, $saldo, '$tipo', $limite_cheque_especial, $taxa_rendimento)");
        $sucess = $connection->query($result);
        $connection->close();
        return $sucess;
    }

    public static function updateConta() {
        
    }

    public static function deleteConta() {

    }














}




































?>