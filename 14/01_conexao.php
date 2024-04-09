<?php

// conexão
$connection = new mysqli("localhost", "root", "", "contatos");

// verificando a conexão
if (!$connection->connect_errno) {
    echo "Sucesso na conexão! <br>";
}

if ($connection->connect_errno) {
    echo "Erro de conexão! <br>";
    echo "erro: " . mysqli_connect_error();
}














?>