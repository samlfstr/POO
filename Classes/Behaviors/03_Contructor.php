<?php

// constructor
// getter methodes
// when not to use arrow notation (with $this->)
// function definition with type
// using @param


class Bicyle
{
    private $brand = "";
    private $model = "";
    private $year = 0;
    private $description = "";
    private $weight_kg = 0;

    /**
     * Bicyle constructor.
     * @param string $brand
     * @param string $description
     * @param int $weight_kg
     */
    public function __construct(string $brand, string $description, int $weight_kg)
    {
        $this->brand = $brand;
        $this->description = $description;
        $this->weight_kg = $weight_kg;
    }

    /**
     * [Getter]
     * @return string
     */
    public function getNameAndDescription(): string
    {
        return "Brand : " . $this->brand . "<br>" . "Description : " .
            $this->description;
    }

    /**
     * [Getter]
     * @return float
     */
    public function getWeight_lbs(): float
    {
        return $this->weight_kg * 2.205;
    }

    /**
     * [Getter]
     * @return int
     */
    public function getWeightKg(): int
    {
        return $this->weight_kg;
    }

}

$brandnew = new Bicyle("Bianchy", "One of the best products in the market", 17);
echo $brandnew->getNameAndDescription() . "<br>";
echo "Weight in lbs : " . $brandnew->getWeight_lbs() . "<br>";
echo "Weight in kg : " . $brandnew->getWeightKg();