<?php 
require_once __DIR__ .'/class/Person.php';
require_once __DIR__ .'/class/Address.php';
require_once __DIR__ .'/class/Customer.php';
require_once __DIR__ .'/traits/traits.php';


$testUser = new Customer('Amu','China','germ@mail.it',9999,0001,);
var_dump($testUser);
var_dump($testUser->getName());