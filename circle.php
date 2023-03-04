<?php

require_once 'shape.php';

class Circle extends Shape{
    private $radius;

    function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}