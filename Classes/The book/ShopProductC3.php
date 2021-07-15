<?php

/**
 * In this class we are using getter and setter methods like they are supposed be used.
 */
class ShopProductC3
{
    private $price;
    private $discount;

    /**
     * @param $promo_code
     */
    public function setDiscount($promo_code): void
    {
        // Only letters
        $cleaned = preg_replace("/[^A-Za-z?!]/", "", $promo_code);
        // Length should be exactely 8
        if (strlen($cleaned) != 8) {
            die('Unvalide promotion code, please check.');
        } else {
            // what ever the price -16
            $cleaned = strlen($cleaned) * 2;
            $this->discount = $cleaned;
        }
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price - $this->discount;

    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        if (!preg_match('/\D/', $price) and $price <= 16) {
            die('Price should be an integer.');
        } else {
            $this->price = $price;
        }
    }
}

$product = new ShopProductC3();
$product->setPrice('');
$product->setDiscount('onlyltrs123');
echo $product->getPrice();