<?php

require_once 'shape.php';

class Rectangle extends Shape{
    private $langth, $width;

    public function __construct($name, $langth, $width)
    {
        parent::__construct($name);
        $this->langth = $langth;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->langth * $this->width;
    }
}