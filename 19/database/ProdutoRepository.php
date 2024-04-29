<?php
require_once 'DatabaseRepository.php';
require_once 'model/Produto.php';

class ProdutoRepository {
    public static function getAllProdutos() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM produto");

        $produtos = [];        
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $produto = new Produto($row['id'], $row['nome'], $row['descricao'], $row['preco']);
                $produtos[] = $produto;
            }
        }
        $connection->close();
        return $produtos;
    }

    public static function getProdutoById($id) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM produto WHERE id = $id");

        $produto = null;
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $produto = new Produto($row['id'], $row['nome'], $row['descricao'], $row['preco']);
        }
        $connection->close();
        return $produto;
    }

    public static function insertProduct(Produto $produto) {
        $connection = DatabaseRepository::connect();

        $nome = $produto->getNome();
        $descricao = $produto->getDescricao();
        $preco = $produto->getPreco();

        $sql = "INSERT INTO produto (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }


    public static function updateProduto(Produto $produto) {
        $connection = DatabaseRepository::connect();
        $id = $produto->getId();
        $nome = $produto->getNome();
        $descricao = $produto->gitDescricao();
        $preco = $produto->getPreco();
        $sql = "UPDATE produto SET nome='$nome', descricao='$descricao', preco='$preco'
            WHERE id=$id";
        $result = $connection->query($sql);
        $connection->close();
        return $success;
    }


public static function deleteProduto($id) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("DELETE FROM produto WHERE id = $id");
        $connection->query($result);
        $connection->close();
        return $result;
    }

}

    

?>