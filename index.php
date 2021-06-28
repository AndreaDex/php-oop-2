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

class Customer extends Person 
{
    protected $address;
    protected $credit_card;

    function setAddress($newAddress){
        $this->address = $newAddress
    }

    
}
?>