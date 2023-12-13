<?php

include_once "Vehicule.php";

class Plane extends Vehicule 
{
    private int $nbrWings;
    private bool $hasHelix;

    public function __construct($engine, $fuel, $color, $maxSpeed, $consumption, $modelName, $nbrWings, $hasHelix)
    {
        parent::__construct($engine, $fuel, $color, $maxSpeed, $consumption, $modelName);
        $this->nbrWings = $nbrWings;
        $this->hasHelix = $hasHelix;
    }

    /**
     * Get the value of hasHelix
     */ 
    public function getHasHelix()
    {
        return $this->hasHelix;
    }

    /**
     * Set the value of hasHelix
     *
     * @return  self
     */ 
    public function setHasHelix($hasHelix)
    {
        $this->hasHelix = $hasHelix;

        return $this;
    }

    /**
     * Get the value of nbrWings
     */ 
    public function getNbrWings()
    {
        return $this->nbrWings;
    }

    /**
     * Set the value of nbrWings
     *
     * @return  self
     */ 
    public function setNbrWings($nbrWings)
    {
        $this->nbrWings = $nbrWings;

        return $this;
    }
}