<?php
require_once './database/ClienteRepository.php';
require_once './database/ContaRepository.php';

print_r(ClienteRepository::getAllClientes());
echo "<br>";
print_r(ContaRepository::getAllContas());
?>