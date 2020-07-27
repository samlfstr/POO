<?php

/*
What ShopProductWriter class does is to serve as a container to all product by holding the methods for it.
 */

class ShopProductC4
{
    public $title;
    public $producer_name;
    public $price;
    protected static $count_instance;

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
        static::$count_instance++;
    }
}

abstract class ShopProductC4Writer{

    protected $products = array();

    public function addProduct(ShopProductC4 $productC4){
        $this->products[] = $productC4;
    }
    abstract public function write();
}

class XmlProductWriter extends ShopProductC4{
    public function write(){
        $str = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $str .= "<products>\n";
        foreach ( $this->products as $shopProduct ) {
            $str .= "\t<product title=\"{$shopProduct->getTitle()}\">\n";
            $str .= "\t\t<summary>\n";
            $str .= "\t\t{$shopProduct->getSummaryLine()}\n";
            $str .= "\t\t</summary>\n";
            $str .= "\t</product>\n";
        }
        $str .= "</products>\n";
        print $str;
    }
}

class TextProductWriter extends ShopProductWriter{
    public function write() {
        $str = "PRODUCTS:\n";
        foreach ( $this->products as $shopProduct ) {
            $str .= $shopProduct->getSummaryLine()."\n";
        }
        print $str;
    }
}