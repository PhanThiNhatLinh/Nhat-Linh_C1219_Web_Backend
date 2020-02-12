<?php 
class Square extends Geomeotric implements Colorable {
    public $side; 
    public function __construct($side)
    {
        $this->side=$side;
    }
    public function howToColor()
    {
        return " Color all four sides.";
    }
    public function getSide(){
        return $this->side;
    }
    public function getArea(){
        return $this->side * $this->side; 
    }

    public function getPirameter(){
        return $this->side * 4; 
    }
}
?>