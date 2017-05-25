<?php
/**
 * Created by PhpStorm.
 * User: bane
 * Date: 06/04/2017
 * Time: 1:56 PM
 */

require_once "Shop.php";

$shop = new Shop("Kismet Shop","Mariam","Female");

$shop->addStaff(["1","Rukayat","Attendant","African Arabic"]);
$shop->addStaff(["2","Aminat","Attendant","White Arabic"]);
$shop->addStaff(["3","Aurora","Manager","Latina"]);
$shop->addStaff(["4","Ahmed","Security","Jihadist Iranian"]);

$shop->addJobToStaff($shop->getSingularStaff(3),"Acquistion And General Inventory Management");
$shop->addJobToStaff($shop->getSingularStaff(4),"Cleaner");

$shop->addProductToShop($shop->getSingularStaff(3), ["3%", "Fish",'5','local']);
$shop->addProductToShop($shop->getSingularStaff(3), ["5%", "Meat",'2','local']);
$shop->addProductToShop($shop->getSingularStaff(3), ["2%", "Pork",'6','local']);

$buyer = new Buyer("1","dotun");
$buyer->buyProduct($shop,"Fish",1);
$buyer->buyProduct($shop,"Meat",5);
$buyer->buyProduct($shop,"Pork",7);
$buyer->checkout();


print_r($buyer);
