<?php 
// require "circle_class.php";
class Cylinder extends Circle{
    public $height;
    public function __construct($radius,$color,$height){
        parent:: __construct($radius,$color);
        $this->height=$height; 
    }
    public function volume(){
        return 2*$this->radius*$this->height*pi();
    }
    public function toString(){
         return "diện tích $this->radius màu sắc $this->color và chiều cao là $this->height"; 
    }
}


?>