<?php

/**
 * Class Adress
 */
class Adress
{
   protected $country;
   protected $city;
   protected $code_postal;

   /**
    * Adress constructor.
    * @param $adress = [country, city, code_postal]
    */
   public function __construct($adress)
   {
      $this->country = $adress['country'] ?? 'undefined';
      $this->city = $adress['city'] ?? 'undefined';

      $this->code_postal = $adress['code_postal'] ?? 'undefined';
   }

   /**
    * Creates an impity object
    * @return mixed
    */
   public static function create()
   {
      $class_name = get_called_class();
      return new $class_name('');
   }

   public function get_adress()
   {
      return
        "Country : ".$this->country."<br>".
        "City : ".$this->city."<br>".
        "Code Postal : ".$this->code_postal."<br>";

   }

}