<?php


class Payement
{
    var $amount;

    /**
     * [Check]
     * @return bool
     */
    public function authorised(){
        //... Send request and validate.
        return true;
    }
}

class Cash extends Payement{
    /**
     * [Calculates Change]
     * @return float
     */
    public function change() : float{
        // calculate change...
        return $this->amount;
    }
}


class Check extends Payement{
    var $name;
    var $bank_id;

    public function authorised()
    {
        return true;
    }
}

class Credit extends Payement{
    var $name;
    var $type;
    var $exp_date;

    public function authorised()
    {
        return true;
    }

}

