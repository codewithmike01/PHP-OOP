<?php



class Basket
{
  public $itemsTotal;
  public $shippingCost;
  public $discount;

  public function calculateDiscount(){
    $subTotal = $this->itemsTotal + $this->shippingCost - $this->discount;
    return $subTotal;
  }
}

$myBasket = new Basket();

$myBasket->itemsTotal = 40;
$myBasket->shippingCost = 100;
$myBasket->discount = 30;

$result = $myBasket->calculateDiscount();
var_dump($result);