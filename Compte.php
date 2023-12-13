<?php

class Compte {
    private float $sum ;
    private float $rate ;

    public function __construct($sum, $rate){
        $this->sum = $sum;
        $this->rate = $rate;
    }

    // Permet à l'objet de se comporter comme un chaine de caractères.
    public function show() 
    {
        echo" compte | somme : $this->sum € | taux: $this->rate % ";
    }
    public function deposit($sumAdd)
    {
        $this->sum += $sumAdd;
    }
    public function withdrawal($money)
    {   
        if ($money <= $this->sum) {
            $this->sum -= $money;
        }else {
            throw new Exception("Pas assez d'argent sur le compte");
        }
    }
    public function interest()
    {
        $this->sum += ($this->rate * $this->sum / 100); 
    }
}