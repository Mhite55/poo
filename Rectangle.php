<?php

include_once "Shape.php";

class Rectangle extends Shape 
{
    public function surface(){
        return $this->lenghtA * $this->lengthB;
    }
}