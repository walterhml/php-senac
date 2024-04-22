<?php
require_once '..//database/ContaRepositoty.php';

$action = $_GET['action'];

switch($action) {
    case 'listar':
        listarContas();
        break;
    case 'buscar':
        buscarContaPorId();
        break;
    case 'cadastrar':
        cadastrarConta();
        break;
    case 'atualizar':
        atualizarConta();
        break;
    case 'excluir':
        excluirConta();
        break;
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);
}

function listarContas() {
    $contas = ContaRepository::getAllContas();
    echo json_encode($contas);
}

function buscarContaPorId(){
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $cliente = ContaRepository::getContaById($id);

        if($cliente) {
            echo json_encode($cliente);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Cliente não encontrado']);
        }
    } else {
        http_response_code(405);
    }
}

function cadastrarConta() {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $cliente_id = $data->cliente_id;
        $numero = $data->numero;
        $saldo = $data->saldo;
        $tipo = $data->tipo;
        $limite_cheque_especial = $data->limite_cheque_especial;
        $taxa_rendimento = $data->taxa_rendimento;

        $success = ContaRepository::insertConta($id, $cliente_id, $numero, $saldo, $tipo, $limite_cheque_especial, $taxa_rendimento);
        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}

function atualizarConta(){
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $cliente_id = $data->cliente_id;
        $numero = $data->numero;
        $saldo = $data->saldo;
        $tipo = $data->tipo;
        $limite_cheque_especial = $data->limite_cheque_especial;
        $taxa_rendimento = $data->taxa_rendimento;

        $success = ContaRepository::updateConta($id, $cliente_id, $numero, $saldo, $tipo, $limite_cheque_especial, $taxa_rendimento); 
        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}

function excluirConta() {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;

        $success = ContaRepository::deleteConta($id);
        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}

?>