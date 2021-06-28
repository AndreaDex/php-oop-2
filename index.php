<?php 
/**
 *  Crea una classe persona
 * */ 
class Person
{
    protected $name;
    protected $lastname;
    protected $email;
    protected $phone;

    function setEmail($newMail){
        $this->email = $newMail
    }

    function setPhone($newPhone){
        $this->phone = $newPhone;
    }

    function __construct($name, $lastname, $email, $phone){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
    }

}

/**
 * Estende la classe Person
 */
class Customer extends Person 
{
    protected $id;
    protected $password;
    protected $address;
    protected $credit_card;
    protected $cart;
    protected $premium = false;

    public function getPremium(){
        return $this->premium;
    }

    private function setPassword($newPassword){
        $this->password = $newPassword;        
    }
    public function setAddress($newAddress){
        $this->address = $newAddress;
    }

    protected function setCardNumber(int $cardNumber){
        $this->credit_card = $cardNumber;
    }

    function  __construct($name, $lastname, $email, $phone, $id,){
        parent::__construct($name, $lastname, $email, $phone);
        $this->id = $id;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP CLASS</title>
</head>
<body>
    
</body>
</html>