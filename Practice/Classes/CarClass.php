<?php


class Wehicle
{
    protected $mark;
    protected $model;
    protected $year;
    public static $wheels = "Unknown";
    public const MILE = 1.609;
    protected const BR = "<br/>";

    /**
     * Wehicle constructor.
     * @param $mark
     * @param $model
     * @param $year
     */
    public function __construct($mark, $model, $year)
    {
        $this->mark = $mark;
        $this->model = $model;
        $this->year = $year;
    }

    /**
     * If km is not an integer it returns null
     * @param $km
     * @return float|int|null
     */
    public static function kmToMile($km)
    {
        return is_int($km) ? $km / self::MILE : null;
    }

    // If I'd used self instead of static the output would Unknown
    public function carProperties(){
        return "Mark : ". $this->mark.self::BR."Model : ".$this->model.self::BR."Year : ".$this->year.self::BR."Wheels : ".static::$wheels.self::BR;
    }

}

class CarClass extends Wehicle{
    public static $wheels = 4;
    protected $reserve;

    /**
     * CarClass constructor.
     * @param $reserve
     * @param $mark
     * @param $model
     * @param $year
     */
    public function __construct($reserve, $mark, $model, $year)
    {
        parent::__construct($mark, $model, $year);
        $this->reserve = $reserve;
    }
    public function carProperties()
    {
        $output = parent::carProperties();
        $output .= "Reserve : ".$this->reserve.self::BR;
        return $output;
    }


}

$car = new CarClass(45,"mervedes","s",2020);
echo $car->carProperties();

$mile = Wehicle::kmToMile(100);
echo (int)$mile;