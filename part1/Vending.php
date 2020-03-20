<?php

class Vending
{
    var $product = '';
    var $amount = 0;
    var $price = 0;
    var $remainingamount = 0;

    function __construct($product, $amount, $price,$remainingamount)
    {
     
        $this->product = $product;
        $this->amount = $amount;
        $this->price = $price;
        $this->remainingamount = $remainingamount;
    }

    function buys(){

    if($this->remainingamount > 0)
        echo "Enjoy your ".$this->product ."<br>Your Change is ".$this->remainingamount;
    else
        echo "Enjoy your ".$this->product;
    }
}
?>