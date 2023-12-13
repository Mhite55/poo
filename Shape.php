<?php 

abstract class Shape
{
    // Déclaration des propriétés
    protected $lenghtA ;
    protected $lengthB ;
    protected $color ; 
    public static $count ;
    public const MAXLIMIT = 10;

    // Déclaration du constructeur
    // Cependant le constructeur n'est pas obligatoire
    // Le constructeur permet "d'injecter des donnés dans l'objet"
    // et ainsi lui donner des caractéristiques différentes à chaque fois

    // Permet principalement d'initialiser un objet.
    public function __construct($lenghtA, $lengthB, $color = "red"){
        // This vise la classe, donc $this->width vise le width de Shape 
        $this->lenghtA = $lenghtA;
        $this->lengthB = $lengthB;
        $this->color = $color;
        self::$count++;
        
    }

    abstract public function surface();
    

    // Les Getters et les Setters
    // Les accesseurs et les mutateurs
    // Ce sont des methodes (desfoction d'objets)

    // LES GETTERS
    public function getLenghtA() 
    {
        return $this->lenghtA;
    }

    public function getLengthB() 
    {
        return $this->lengthB;
    }

    // LES SETTERS
    public function setLenghtA($lenghtA) 
    {
        $this->lenghtA = $lenghtA;
    }

    public function setLengthB($lengthB) 
    {
        $this->lengthB = $lengthB;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    // public function getPerimeter() 
    // {
    //     return ($this->length + $this->width) * 2;
    // }

    // // Permet à l'objet de se comporter comme un chaine de caractères.
    // public function __toString() 
    // {
    //     return " Cette forme a un longeur de $this->length et une largeur de $this->width";
    // }
    // public function drawShape()
    // {
    //     echo '<div
    //     style="
    //     background-color : ' . $this->color . ';
    //     width :' . $this->width . 'px;
    //     height :' . $this->length . 'px;
    //     "
    //     ></div>';
    // }
}