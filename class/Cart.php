<?php
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

    function setShippingAddress(Address $address){
        $this->shippingpAddress = $address;
    }
};