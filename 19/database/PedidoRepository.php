<?php

require_once 'DatabaseRepository.php';
require_once 'model/Pedido.php';

class PedidoRepository {
    public static function getAllPedidos() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido");

        $pedidos = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $pedido = new Pedido($row['id'], $row['data_pedido'], $row['status']);
                $pedidos[] = $pedido;
            }
        }
        $connection->close();
        return $pedidos;
    }

    public static function getPedidoById($id) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM produto WHERE id = $id");

        $pedido = null;
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pedido = new Produto($row['id'], $row['descricao'], $row['preco']);
        }
        $connection->close();
        return $pedido;
    }

    public static function insertProduct(Produto $pedido) {
        $connection = DatabaseRepository::connect();

        $







    }
















































}
?>