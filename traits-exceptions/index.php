<?php 
require_once __DIR__ .'/class/Person.php';
require_once __DIR__ .'/class/Address.php';
require_once __DIR__ .'/class/Customer.php';
require_once __DIR__ .'/traits/traits.php';

$customerAddress = new Address('via dei pazzi','3', 85042,'Fornelli', 'Italia');

$customers=[
    new Customer('Ermes','Grillo','grillo@mail.it',9999,0001,),
    new Customer('Violetta','Santoro','santoro@mail.it',8888,0002,),
    new Customer('Tania','Caivano','caivano@mail.it',7777,0003,),
    new Customer('Bartolo','Guerra','guerra@mail.it',6666,0004,),
    new Customer('Renata','Grosso','grosso@mail.it',5555,0005,)

];

/* $a = $customers[0];
$a->setAddress($customerAddress);
var_dump($a);
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trait - Exception</title>
</head>
<body>

    <?php foreach ($customers as $customer) : ?>
        <div>
             <h2>Ciao <?= $customer->getName() ?> <em><?= $customer->getLastname() ?></em></h2>
        </div>
        <p>
            <?php 
                try {

                   $customer->setAddress('Bazinga');

                } catch (Exception $e) {
                   echo 'Mi dispiace ma : '.$e->getMessage();
                }
            ?>

        </p>
    
    <?php 
    endforeach
     ?>


    
</body>
</html>