<?php 

class Position 
{
    private int $positionX;
    private int $positionY;

    public function __construct()
    {
        $this->positionX = 0;
        $this->positionY = 0;
    }

    public function translate($newPositionX, $newPositionY){
        $this->positionX += $newPositionX;
        $this->positionY += $newPositionY;
    }
    public function show()
    {
        echo "Position X : $this->positionX | Y : $this->positionY ";
    }
}
