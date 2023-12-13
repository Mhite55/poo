<?php
// Une classe abstraite est une classe qui décrira plusieurs classes filles

// Une chos importante une class mère/abstraite ne peut etre instanciées, elle est là pour uniquement décrire d'autre classes
// il est donc interdit de faire par exemple $vehicule = newVehicule (...)
// Le classes filles peuvent être instanciées
abstract class Vehicule
{   
    // Protected, est par defaut priver vers l'exterieur
    // mais public envers ses classes filles.
    protected $engine;
    protected $fuel ;
    protected $color;
    protected $maxSpeed;
    protected $consumption;
    protected $modelName;

    public function __construct($engine, $fuel, $color, $maxSpeed, $consumption, $modelName) {
        $this->engine = $engine;
        $this->fuel =$fuel; 
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
        $this->consumption = $consumption;
        $this->modelName = $modelName;

    }

    /**
     * Get the value of engine
     */ 
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Set the value of engine
     *
     * @return  self
     */ 
    public function setEngine($engine)
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * Get the value of fuel
     */ 
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set the value of fuel
     *
     * @return  self
     */ 
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    /**
     * Get the value of consumption
     */ 
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * Set the value of consumption
     *
     * @return  self
     */ 
    public function setConsumption($consumption)
    {
        $this->consumption = $consumption;

        return $this;
    }

    /**
     * Get the value of modelName
     */ 
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Set the value of modelName
     *
     * @return  self
     */ 
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;

        return $this;
    }
}