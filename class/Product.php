<?php
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
};