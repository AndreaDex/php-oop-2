<?php
/**
 * ! Estende la classe Person
 */
class Customer extends Person 
{
    protected $id;
    protected $password;
    protected $address;
    protected $credit_card;
    protected $cart;
    protected $premium = true;

    public function getPremium(){
        return $this->premium;
    }
    public function getAddress(){
        return $this->address;
    }
    


    private function setPassword($newPassword){
        $this->password = $newPassword;        
    }
    public function setAddress(Address $newAddress){
        $this->address = $newAddress;
    }

    public function setCardNumber($cardNumber){
        $this->credit_card = $cardNumber;
    }

    public function getCardNumber(){
       
        return $this->credit_card ;
    }

        /**
     * * Crea un oggetto di classe Customer (estende classe Person)
     * @param string $name 
     * @param string $lastname
     * @param string $email
     * @param int $phone
     * @param int $id
     */
    function  __construct($name, $lastname, $email, $phone, $id){
        parent::__construct($name, $lastname, $email, $phone);
        $this->id = $id;
    }
}    