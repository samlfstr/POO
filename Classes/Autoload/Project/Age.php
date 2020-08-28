<?php


class Age
{

   protected $age;

   /**
    * Age constructor.
    * @param $age
    */
   public function __construct($age)
   {
      $this->age = $age;
   }


   public static function create()
      {
         $class_name = get_called_class();
         return new $class_name('');
      }

      public function get_age()
      {
         return $this->age."<br>";
      }
}