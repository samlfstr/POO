<?php


/*
   With this approach we are passing values to the constactor using an array.
*/

class MagiCtorNullCoalessing
{
    private $name;
    private $adress;
    private $date;
    private const BR = "<br/>";

    /**
     * MagiCtorNullCoalessing constructor.
     * @param $arr
     */
    public function __construct($arr)
    {
        // arr is not null or defined then arr!!!
        $this->name = $arr['name'] ?? null;
        $this->adress = $arr['adress'] ?? null;
        $this->date = $arr['date'] ?? null;

    }

    public function info() : string {
        return 'Name :'. $this->name.self::BR.'Adress :'.$this->adress.self::BR.'Date :'.$this->date.self::BR;
    }
}

$new_magic = new MagiCtorNullCoalessing([
    // even if I let it empty that ctor works!!!
    //'name'=>'Samuel',
    'adress'=>'Yenimahalle/Ankara',
    'date'=>'2020'
]);

echo $new_magic->info();
