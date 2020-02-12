<?php 
class Circle {
    public $radius;
    public $color;
    public function __construct($radius,$color){
        $this->radius=$radius;
        $this->color=$color; 
    }
    public function getRadius($radius){
        return $this->radius=$radius; 
    }
    public function getColor($color){
        return $this->color=$color;
    }
    public function calculateAre(){
        return pi()* pow($this->radius,2); 
    }public function toString(){
        return "diện tích $this->radius màu sắc $this->color"; 
    }
}

?>