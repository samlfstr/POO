<?php

/**
 * In this class we are using parent:: key word
 */

class ShopProductClass
{
    public $title;
    public $producer_m_name;
    public $producer_f_name;
    public $price;

    /**
     * ShopProductC1 constructor.
     * @param $title
     * @param $producer_f_name
     * @param $producer_m_name
     * @param $price
     */
    public function __construct($title,
                                $producer_f_name,
                                $producer_m_name, $price)
    {
        $this->title = $title;
        $this->producer_f_name = $producer_f_name;
        $this->producer_m_name = $producer_m_name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    function getProducer(): string
    {
        return "{$this->producer_f_name}" .
            "{$this->producer_m_name}";
    }

    /**
     * @return string
     */
    function getSummaryLine(): string
    {
        $base = "$this->title ({$this->producer_f_name}";
        $base .= "{$this->producer_m_name})";
        return $base;
    }
}

class CdProductClass extends ShopProductClass
{
    public $play_time;

    public function __construct($title, $producer_f_name, $producer_m_name, $price,
                                $play_time)
    {
        parent::__construct($title, $producer_f_name, $producer_m_name, $price);
        $this->play_time =$play_time;
    }
    /**
     * @return mixed
     */
    public function getPlayLength()
    {
        return $this->play_time;
    }

    public function getSummaryLine(): string
    {
        $base = parent::getSummaryLine();
        $base .= ": playing time - {$this->play_time}";
        return $base;
    }

}

class BookProductClass extends ShopProductClass
{
    public $num_pages;

    public function __construct($title, $producer_f_name, $producer_m_name, $price,
                                $num_pages)
    {
        parent::__construct($title, $producer_f_name, $producer_m_name, $price);
        $this->num_pages = $num_pages;
    }
    /**
     * @return mixed
     */
    public function getNumPages()
    {
        return $this->num_pages;
    }

    public function getSummaryLine(): string
    {
        $base = parent::getSummaryLine();
        $base .= ": page count - {$this->num_pages}";
        return $base;
    }
}

//  Learning about an Object or Class

 $shop_product = new BookProductClass('Ball','Samuel', 'Foster',50,139);

// get_class

/*if (get_class($shop_product) == 'ShopProductClass'){
  echo $shop_product->getSummaryLine();
}else{
  echo "This is not a ShopProduct";
}*/

// instanceof

/*
if($shop_product instanceof  BookProductClass){
  echo "It is instance of BookProduct";
}
else{
  echo "It is not instance of BookProduct";
}*/

// Learning about methodes
$class_methodes = get_class_methods($shop_product);
var_dump($class_methodes);