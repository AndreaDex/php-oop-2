<?php 
require_once __DIR__ .'/class/Person.php';
require_once __DIR__ .'/class/Customer.php';
require_once __DIR__ .'/class/Address.php';
require_once __DIR__ .'/class/Item.php';
require_once __DIR__ .'/class/Product.php';
require_once __DIR__ .'/class/Cart.php';



$customerAddress = new Address('via dei pazzi','3', 85042,'Fornelli', 'Italia');
$mario = new Customer('Mario','Rossi','mario.rossi@mail.it', 3334455666, 0000001);
$mario->setPhone(3337788999);
$mario->setAddress($customerAddress);
$getMarioPremium = $mario->getPremium();
$getMarioCard = $mario->getCardNumber();

$phone= new Product('id001','huawei','mate10 Pro','smartphone', 149.99);
$phone->setScount($getMarioPremium);

$carrello =new Cart();
$carrello->setShippingAddress($customerAddress);
$carrello->setPayMethod($getMarioCard);


$mario->setCardNumber(true);
$getMarioCard = $mario->getCardNumber();
$carrello->setPayMethod($getMarioCard);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
</head>
<body>
<div>
    <h2>Customer</h2>
        <h3><?php echo $mario->getName() ?> </h3>
        <h3><?php echo $mario->getLastname() ?></h3>
        <p><?php echo $mario->getEmail() ?></p>
        <p><?php echo $mario->getPhone() ?></p>
    </div>

   
</body>
</html>

