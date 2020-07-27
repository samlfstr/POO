<?php


/*
   With this approach we are passing values to the constactor using an array.
*/

class MagiCtorNullCoalessing
{
    private $name;
    private $adress;
    private $date;

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

}

$new_magic = new MagiCtorNullCoalessing([
    'name'=>'Samuel',
    'adress'=>'Yenimahalle/Ankara',
    'date'=>'2020'
]);