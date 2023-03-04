<?php

abstract class Shape{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

    abstract function getArea();
}