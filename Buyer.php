<?php

/**
 * Created by PhpStorm.
 * User: bane
 * Date: 09/04/2017
 * Time: 3:02 PM
 */

require_once "Shop.php";
require_once "Product.php";

class Buyer
{
    private $id;
    private $name;
    private $cart = [];
    private $topay = [];
    private $money;
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->money = 0;
    }

        public function buyProduct($shop, $itemname, $quantity){

        for ($i = 0; $i <= $quantity; $i++){
            $product = $shop->getParticularProduct($itemname);
            $this->cart[] = $product;
            $productPrice = $product->getPrice();
            $productDiscount = $product->getProductdiscount();
            $actualPrice = $productPrice - $productPrice * ($productDiscount / 100);
            $this->topay[] = $actualPrice;

        }

        if($quantity > 3){
            //if a customer buys more of something it obviously means he/she prefers that,
            // so this stores that dat if the item being bought by the customer exceeds a certain amount.

            $shop->setCustomerPreferences([$this->name,$shop->getParticularProduct($itemname)]);
        }


        }

        public function checkout(){
            $this->money = array_sum($this->topay);
            if($this->money > 15){
               // print "Mr/Mrs ".$this->name." Should Pay ".$this->money;
                return $this->money - $this->money * 15/100;
            }
            else{
                //print "Mr/Mrs ".$this->name." Should Pay ".$this->money;

                return $this->money;
            }

        }




    /**
     * @return array
     */
    public function getCart()
    {
        return $this->cart;
    }


}