<?php

/**
 * In this class we use inheritance with ctors
 */

class ShopProductC1
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

class CdProduct extends ShopProductC1
{
    private $play_time;

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
        $base = "$this->title ({$this->producer_f_name}";
        $base .= "{$this->producer_m_name})";
        $base .= ": playing time - {$this->play_time}";
        return $base;
    }

}

class BookProduct extends ShopProductC1
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
        $base = "$this->title ({$this->producer_f_name}";
        $base .= "{$this->producer_m_name})";
        $base .= ": page count - {$this->num_pages}";
        return $base;
    }
}

$product1 = new BookProduct('Personnal developpement', 'Samuel','Foster',35,129);
echo $product1->getSummaryLine();