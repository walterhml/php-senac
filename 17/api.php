<?php

require_once 'DatabaseRepository.php';

//print_r(DatabaseRepository::getContactbyId());

echo DatabaseRepository::deleteContact(22, "Pessa B", "11 99755555", "pessoa_b@mail.com");





?>