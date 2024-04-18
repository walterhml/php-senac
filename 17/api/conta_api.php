<?php

require_once '../database/ContaRepositoty.php';

$action = $_GET['action'];

switch($action) {
    case 'listar':
        listarcontas();
        break;
    default:
        http_response_code(400);
        echo json_encode(['error' => 'Ação invalida']);
}

function listarContas() {
    $contas = ContaRepository::getAllContas();
    echo json_encode($contas);
}


?>