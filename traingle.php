<?php

require_once 'shape.php';

class Traingle extends Shape{
    private $base, $height;

    public function __construct($name, $base, $height)
    {
        parent::__construct($name);
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}