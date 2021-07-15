<?php

// Now I am going to be able to see all the methodes when I pass the interface as a
// variable type into another function
interface ShapeInterface
{
    public function draw();

    public function color();
}

// Shapes
class Cercle implements ShapeInterface
{
    public function draw()
    {
        echo "Draw Cercle";
    }

    public function color()
    {
    }
}

class Square implements ShapeInterface
{
    public function draw()
    {
        echo "Draw Square";
    }

    public function color()
    {
    }
}

class Rectangle implements ShapeInterface
{
    public function draw()
    {
        echo "Draw Rectangle";
    }

    public function color()
    {
    }
}

/*
 * I am defining another class in which a method passes an object type variable. And
 * this is an interface.
 *
 *    public function addShape($shape){
 *      return $shape->draw;
 *    }
 *
 */

class Painter
{
    // now I can see all the methodes shared by other shape classes
    public function addShape(ShapeInterface $shape)
    {
        return $shape->draw();
    }

    public function addColor(ShapeInterface $color)
    {
        return $color->color();
    }
}
