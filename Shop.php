<?php

/**
 * Created by PhpStorm.
 * User: bane
 * Date: 06/04/2017
 * Time: 1:45 PM
 */

require_once "Staff.php";
require_once "Product.php";
require_once "Buyer.php";

class Shop
{   private $shopName;
    private $ownerName;
    private $gender;
    private $staff = [];
    protected $products = [];
    private $customerPreferences = [];

    public function __construct($shopName, $ownerName, $gender)
    {
        $this->shopName = $shopName;
        $this->ownerName = $ownerName;
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $ownerName
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * @return array
     */
    public function getStaff()
    {
        return $this->staff;
    }

    /**
     * @return array
     */
    public function getSingularStaff($id)
    {
        return $this->staff[$id];
    }

    /**
     * @param array $staff
     */
    public function addStaff($staff)
    {
        if (is_array($staff)){
            $staffer = new Staff($staff[0],$staff[1],$staff[2],$staff[3]);
            $this->staff[$staff[0]] = $staffer;
        }

    }

       public function addJobToStaff($staff, $extraJob){

            $staff->setStaffJob($extraJob);

    }
//problem area
       public function addProductToShop($staff,$data){

           if(in_array("Acquistion And General Inventory Management", $staff->getStaffJob())){
                $this->products[$data[1]] = new Product($data[0],$data[1],$data[2],$data[3]);
            }else{
               print("\n");
               echo "This Staff does not have the ability to Mange Inventory, Tell The Manager! ";
            }
       }

        public function getProductsInShop(){
           return $this->products;
        }

        public function getParticularProduct($name){
            return $this->products[$name];
        }

    /**
     * @param array $customerPreferences
     */
    public function setCustomerPreferences($customerPreferences)
    {
        $this->customerPreferences[] = $customerPreferences;
    }

    /**
     * @return array
     */
    public function getCustomerPreferences()
    {
        return $this->customerPreferences;
    }


}



