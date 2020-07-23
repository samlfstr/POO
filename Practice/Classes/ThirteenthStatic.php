<?php

/* Self key word refers always to the super (main / parent)
 * class's variable (parameter).
 * The out put with self::$age inside the main function
 * Will alway be 2, The only way to make a change is to
 * Use static key word inside the main function instead of self
 */


class ThirteenthStatic
{
    protected static $age = 2;

    /**
     * @return string
     */
    public static function ageInfo() : string {
        // return self::$age == 1 ? "One" : "Two";
        return static::$age == 1 ? "One" : "Two";
    }
}

class Subclass extends ThirteenthStatic {
    // Try to override the age variable
    protected static $age = 1;
}

echo ThirteenthStatic::ageInfo();
echo Subclass::ageInfo();