<?php


class House
{
    protected $wc;
    protected $meterSquar;
    protected $balcony;

    /**
     * House constructor.
     * @param $wc
     * @param $meterSquar
     * @param $balcony
     */
    public function __construct($wc, $meterSquar, $balcony)
    {
        $this->wc = $wc;
        $this->meterSquar = $meterSquar;
        $this->balcony = $balcony;
    }

    /**
     * @return string
     */
    public function Info(): string
    {
        $veritas = $this->wc ? "Yes" : "No";
        $str = "Wc : " . "{$veritas}" . "</br>";
        $str .= "MeterSquare : " . "{$this->meterSquar}" . "</br>";
        $veritas = $this->balcony ? "Yes" : "No";
        $str .= "Balcony : " . "{$veritas}" . "</br>";
        return $str;
    }

}

class Kitchen extends House
{
    private $oven;

    /**
     * Kitchen constructor.
     * @param $wc
     * @param $meterSquar
     * @param $balcony
     * @param $oven
     */
    public function __construct($wc, $meterSquar, $balcony, $oven)
    {
        parent::__construct($wc, $meterSquar, $balcony);
        $this->oven = $oven;
    }

    public function Info(): string
    {
        $veritas = $this->oven ? "Yes" : "No";
        $str = parent::Info();
        $str .= "Oven : " . "{$veritas}" . "</br>";
        return $str;
    }
}

$room = new Kitchen(true, 150, false, true);
echo $room->Info();