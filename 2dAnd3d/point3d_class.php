<?php 

class Point3d extends Point2d{
    public $z;
    public function __construct($x,$y,$z)
    {
    parent:: __construct($x,$y);
    $this->z=$z;

    }
    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z1)
    {
        $this->z=$z1;
    }

    public function setXYZ($x1,$y1,$z1)
    {
        parent:: setXY($x1,$y1);
        $this->z=$z1;
    }
    public function getXYZ()
    {   
        return [$this->x,$this->y,$this->z]; 
    }

    public function __toString()
    {
        return $this->x.",".$this->y ."và".$this->z; 
    }
}

?>
