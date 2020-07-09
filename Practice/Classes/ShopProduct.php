<?php

class ShopProduct
{
    public $title;
    public $producer_name;
    public $price;

    /**
     * ShopProduct constructor.
     * @param $title
     * @param $producer_name
     * @param $price
     */
    public function __construct($title, $price, $producer_name)
    {
        $this->title = $title;
        $this->producer_name = $price;
        $this->price = $producer_name;
    }
}

class ShopProductWriter
{
    function writeShopProduct(ShopProduct $product){
        $print = $product->producer_name . " " . $product->title . " " . $product->price;
        echo $print;
    }
}
//I am passing the Mainclass's instance as argument in another subclass's function.
$shop_product = new ShopProduct('Phone','150$','Apple'); // instance
$product = new ShopProductWriter(); // sub-class
$product->writeShopProduct($shop_product);






