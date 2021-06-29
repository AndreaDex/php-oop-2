<?php
require_once __DIR__ .'/../traits/traits.php';
require_once __DIR__ .'/Address.php';
/**
 * ! Estende la classe Person
 */
class Customer extends Person 
{
    use GetName, GetLastName;
    protected $id;
    protected $password;
    protected $address;
    protected $credit_card;
    protected $cart;
    protected $premium = true;

    public function getPremium(){
        return $this->premium;
    }

    private function setPassword($newPassword){
        $this->password = $newPassword;        
    }
    public function setAddress($newAddress){

        if ($newAddress !== Address){
            throw new Exception('Indirizzo inserito non è valido', 666,);
        }
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