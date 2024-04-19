<?php

require_once '../database/ClienteRepository.php';

$action = $_GET['action'];

switch($action) {
    case 'listar':
        listarClientes();
        break;
    case 'buscar':
        buscarClientePorId();
        break;
    case 'cadastrar':
        cadastrarCliente();
        break;
    case 'atualizar':
        atualizarCliente();
    case 'excluir':
        excluirCliente();
        break;
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);
}

function listarClientes() {
    $clientes = ClienteRepository::getAllClientes();
    echo json_encode($clientes);
}

function buscarClientePorId() {
    $id = $_GET['id'];
    ClienteRepository::getAllClientes();
}

function cadastrarCliente() {

}

function atualizarCliente() {

}

function excluirCliente() {

}
// Create Read Update Ddelete
// Create = POST (INSERT)
// Read = GET (SELECT)
// Update = POST(GET) (UPDATE SET)
// Delete = POST (DELETE)