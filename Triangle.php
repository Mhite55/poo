<?php

include_once "Shape.php";

class Triangle extends Shape 
{
    public function surface(){
        return $this->lenghtA * $this->lengthB * 0.5;
    }
}