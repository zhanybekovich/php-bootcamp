<?php
// Abstract class
/*
An abstract class in PHP is a class that cannot be instantiated on its own and is designed to be extended by other classes. Abstract classes are used to define a common interface and shared functionality for a group of related classes while ensuring that certain methods are implemented in the child classes.
*/

abstract class Shape
{
    protected $name;

    // abstract method
    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    // concrete method
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle('Circle', 5);
echo $circle->getName() . ' ' . $circle->calculateArea();

echo '<hr>';

$rect = new Rectangle('Rect', 10, 5);
echo $rect->getName() . ' ' . $rect->calculateArea();
