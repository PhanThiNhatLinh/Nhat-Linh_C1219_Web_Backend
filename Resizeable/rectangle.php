<?php 

class Rectangle implements Resizeable{
    public $height;
    public $width;
    public function __construct($height,$width)
    {
        $this->height=$height;
        $this->width=$width; 
    }
    public function getHeight(){
        return $this->height;
    }
    public function getWidth(){
        return $this->width;
    }
    public function setWidth($width){
         $this->width=$width;
    }
    public function setHeight($height){
        $this->height=$height;
   }
   public function Resize($number){
    $this->height=($this->height* $number)/100+ $this->height;
    $this->width = ($this->width* $number)/100+ $this->width;
    // muốn tăng lên bao nhiêu phần trăm thể hiện bởi Number;
   }
   public function getArea(){
      return $this->height * $this->width; 
   }
}
?>