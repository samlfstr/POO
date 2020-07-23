<?php

/*
The way we acces to a class constant is the same as when we call a static method or
variable
*/

class EleventhClock
{
    public const DAY_IN_SEC = 60 * 60 * 24;

    // We need to use the self keyword at the beginning of the const before we call it
    // unless php wont able to execute the code. In other words I need to say explicitly
    // that we are
    // using a class constant.
    public function tomorrow(){
        return time() + self::DAY_IN_SEC;
    }

}

echo EleventhClock::DAY_IN_SEC;