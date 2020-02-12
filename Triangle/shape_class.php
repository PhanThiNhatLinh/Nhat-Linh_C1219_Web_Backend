<?php 
class Shape {
    private $name;
    public $color;
    public function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color; 
    }
    // public function __toString()
    // {
    //     return " màu sắc $this->color"; 
    // }

    public function getName() 
    {
        return $this->name;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }
}
?>