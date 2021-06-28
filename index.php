<?php 
/**
 * ! Crea una classe persona
 * */ 
class Person
{
    protected $name;
    protected $lastname;
    protected $email;
    protected $phone;

    function setEmail($newMail){
        $this->email = $newMail;
    }

    function setPhone($newPhone){
        $this->phone = $newPhone;
    }
    /**
     * * Crea un oggetto di classe Person
     * @param string $name 
     * @param string $lastname
     * @param string $email
     * @param int $phone
     */
    function __construct($name, $lastname, $email, $phone){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
    }

}

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

    private function setPassword($newPassword){
        $this->password = $newPassword;        
    }
    public function setAddress($newAddress){
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

class Address 
{
    protected $street;
    protected $street_number;
    protected $cap;
    protected $city;
    protected $country;

    function __construct($street, $street_number, $cap, $city, $country){
        $this->street = $street;
        $this->street_number = $street_number;
        $this->cap = $cap;
        $this->city = $city;
        $this->country = $country;
    }
}

class Item 
{
    public $item_id;
    

    function __construct($item_id)
    {
        $this->item_id = $item_id;
       

    }
}

class Product extends Item 
{
    protected $name;
    protected $desc;
    protected $category;
    protected $price;
    protected $discount;
    

     public function setScount($premium){
        if($premium){
            $this->discount = 10;
        }
    } 

    function __construct($item_id, $name, $desc, $category, $price){

        parent::__construct($item_id);

        $this->name = $name;
        $this->desc = $desc;
        $this->category = $category;
        $this->price = $price;
    }
}

class Cart 
{
    protected $payment;
    protected $shippingpAddress;

    function setPayMethod($credit_card){
        if($credit_card){
            $this->payment = 'Pagamento con carta';
        }else {
            $this->payment = 'Pagamento cash';
        }
    }

    function setShippingAddress($address){
        $this->shippingpAddress = $address;
    }
}



$customerAddress = new Address('via dei pazzi','3', 85042,'Fornelli', 'Italia');
$mario = new Customer('Mario','Rossi','mario.rossi@mail.it', 3334455666, 0000001);
$mario->setPhone(3337788999);
$mario->setAddress($customerAddress);


var_dump($mario);

$getMarioPremium = $mario->getPremium();
$getMarioCard = $mario->getCardNumber();
//var_dump($getMarioPremium);

$phone= new Product('id001','huawei','mate10 Pro','smartphone', 149.99);
$phone->setScount($getMarioPremium);
var_dump($phone);

$carrello =new Cart();
$carrello->setShippingAddress($customerAddress);
$carrello->setPayMethod($getMarioCard);



var_dump($carrello);

$mario->setCardNumber(true);
$getMarioCard = $mario->getCardNumber();
$carrello->setPayMethod($getMarioCard);
var_dump($carrello);

?>

