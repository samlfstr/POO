<?php


/*
   With this approach we are passing values to the constructor using an array.
*/

class MagiCtorNullCoalescing
{
    private $name;
    private $address;
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
        $this->address = $arr['address'] ?? null;
        $this->date = $arr['date'] ?? null;

    }

    public function info() : string {
        return 'Name :'. $this->name.self::BR.'Address :'.$this->address.self::BR.'Date :'.$this->date.self::BR;
    }
}

$new_magic = new MagiCtorNullCoalescing([
    // even if I let it empty that ctor works!!!
    //'name'=>'Samuel',
    'address'=>'Yenimahalle/Ankara',
    'date'=>'2020'
]);

echo $new_magic->info();
