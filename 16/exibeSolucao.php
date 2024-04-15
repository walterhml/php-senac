<?php
require_once 'solucao.php';

$repository = new DatabaseRepository();

// echo ($repository->addItem("Abacaxi", 2));
// $repository->updateItem(4, "Arroz", 1, 1);

$repository->deleteItem(13);



?>