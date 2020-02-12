<?php 
class Triangle extends Shape {
    protected $side1;
    protected $side2;
    protected $side3;

    public function __construct($name, $color,$side1 = 1.0, $side2 = 1.0, $side3 = 1.0 )
    {
        parent::__construct($name,$color); 
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;
    }

    public function getSide1(){
        return
         $this->side1;
    }

    public function getSide2(){
        return $this->side2;
    }
    
    public function getSide3(){
        return $this->side3;
    }

    public function getcolor(){
        return $this->color;
    }

    public function setSide1($side1){
         $this->side1=$side1;
    }

    public function setSide2($side2){
         $this->side2=$side2;
    }

    public function setSide3($side3){
        $this->side3=$side3;
    }

    public function setcolor($color){
        $this->color=$color;
    }

    public function getPirameter(){
        return ($this->side1 + $this->side2 + $this->side3);
    }

    public function getArea(){
        // $p=$this->getPirameter(); 
        // gọi từ hàm phía trên
        $p=($this->side1 + $this->side2 + $this->side3)/2;
        return (sqrt($p * ($p - $this->side1) * ($p-$this->side2) * ($p-$this->side3)));
    }

    public function __toString()
    {
     return "tam giác có 3 cạnh, cạnh 1 = ".$this->side1." cạnh hai = ".$this->side2." cạnh 3 = ".$this->side3." màu sắc là ".$this->color."<br>"." chu vi ".$this->getPirameter()." diện tích ".$this->getArea();

    }
}


?>