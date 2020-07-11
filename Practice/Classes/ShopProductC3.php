<?php


class ShopProductC3
{
    private $price;
    private $discount;

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        if (!preg_match('/\D/', $price) and $price <= 16) {
            die('Price should be an integer.');
        }else{
            $this->price = $price;
        }
    }

    /**
     * @param $promo_code
     */
    public function setDiscount($promo_code): void
    {
        // Only letters
        $cleaned = preg_replace("/[^A-Za-z?!]/", "",$promo_code);
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
}

$product = new ShopProductC3();
$product->setPrice('');
$product->setDiscount('onlyltrs123');
echo $product->getPrice();