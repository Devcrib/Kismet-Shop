<?php

/**
 * Created by PhpStorm.
 * User: bane
 * Date: 06/04/2017
 * Time: 2:46 PM
 */
class Product
{
    private $productname;
    private  $productdiscount;
    private $price;
    private $type;

    public function __construct($productdiscount, $productname,$price, $type)
    {
    $this->productdiscount = $productdiscount;
    $this->productname = $productname;
    $this->price = $price;
    $this->type = $type;

    }

    /**
     * @return mixed
     */

    public function getProductdiscount()
    {
        return $this->productdiscount;
    }

    /**
     * @param mixed $productdiscount
     */

    public function setProductdiscount($productdiscount)
    {
        $this->productdiscount = $productdiscount;
    }

    /**
     * @return mixed
     */

    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * @param mixed $productname
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}