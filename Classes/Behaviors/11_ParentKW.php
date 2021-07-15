<?php


class TwelweChef
{
    public static function make_dinner()
    {
        echo "Cook food";
    }
}

class HalfChef extends TwelweChef
{

    public static function make_dinner()
    {
        echo "Reed the recipe";
        parent::make_dinner();
        echo "Clean up mess";
    }
}

TwelweChef::make_dinner();
// Cook food;

HalfChef::make_dinner();
// Read receipe.
// Cook food.
// Clean up mess.