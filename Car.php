<?php
include_once "Vehicule.php";

class Car extends Vehicule 
{
    private int $nbrWheels;
    private int $nbrDoors;
    private bool $isAutomatic;
    private string $plate;


    public function __construct($engine, $fuel, $color, $maxSpeed, $consumption, $modelName, $nbrWheels, $nbrDoors, $isAutomatic, $plate)
    {
        parent::__construct($engine, $fuel, $color, $maxSpeed, $consumption, $modelName);
        $this->nbrWheels = $nbrWheels;
        $this->nbrDoors = $nbrDoors;
        $this->isAutomatic = $isAutomatic;
        $this->plate = $plate;
    }

    /**
     * Get the value of nbrWheels
     */ 
    public function getNbrWheels()
    {
        return $this->nbrWheels;
    }

    /**
     * Set the value of nbrWheels
     *
     * @return  self
     */ 
    public function setNbrWheels($nbrWheels)
    {
        $this->nbrWheels = $nbrWheels;

        return $this;
    }

    /**
     * Get the value of nbrDoors
     */ 
    public function getNbrDoors()
    {
        return $this->nbrDoors;
    }

    /**
     * Set the value of nbrDoors
     *
     * @return  self
     */ 
    public function setNbrDoors($nbrDoors)
    {
        $this->nbrDoors = $nbrDoors;

        return $this;
    }

    /**
     * Get the value of isAutomatic
     */ 
    public function getIsAutomatic()
    {
        return $this->isAutomatic;
    }

    /**
     * Set the value of isAutomatic
     *
     * @return  self
     */ 
    public function setIsAutomatic($isAutomatic)
    {
        $this->isAutomatic = $isAutomatic;

        return $this;
    }

    /**
     * Get the value of plate
     */ 
    public function getPlate()
    {
        return $this->plate;
    }

    /**
     * Set the value of plate
     * Format deux lettre / 3chiffre / 2lettre
     * @return  self
     * Exo:
     * Réécrire cette methode, pour quel accepte uniquement
     * les plaque du format suivant AA-000-AA
     * si le format n'est pas bon, les plaques ne changent pas.
     * Utilisation d'un regex 
     */ 
    public function setPlate($plate)
    {
        if ( strlen($plate) <= 9) {
            $reg = "/[A-Z]{2}-\d{3}-[A-Z]{2}/";
            if ( preg_match($reg, $plate)){
                $this->plate = $plate;
            }
        }
    }
}