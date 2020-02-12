<?php 

class Circle implements Resizeable {
    public $radius;
    public function __construct($radius)
    {
        $this->radius=$radius;
    }
    public function getRadius(){
        return $this->radius; 
    }
    public function setRadius($radius){
        $this->radius=$radius;
    }
    public function Resize($number){
     $this->radius= ($this->radius* $number)/100+ $this->radius; 
    }
    // public function setResize(){
    
    // }
    public function getArea(){
        return $this->radius * $this->radius * pi(); 
    }
}
?>