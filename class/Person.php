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
    public function getName(){
        return $this->name;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
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

};