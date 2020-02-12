<?php 
class Point
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX($x1)
    {
        $this->x = $x1;
    }

    public function setY($y1)
    {
        $this->y = $y1;
    }

    public function getXY()
    {
        return $this->x;
        return $this->y;
    }

    public function setXY($x1, $y1)
    {
        $this->x = $x1;
        $this->y = $y1;
    }
    
    public function toString()
    {
        return "$this->x và $this->y ";
    }
}
?>