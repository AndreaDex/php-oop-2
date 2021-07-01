<?php
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
