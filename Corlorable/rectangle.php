<?php 
class Rectangle extends Geomeotric{
    public $height;
    public $width;
    public function __construct($height,$width)
    {
        $this->width=$width;
        $this->height=$height;
    }
    public function getHeight(){
        return $this->height;
    }
    public function getWidth(){
        return $this->width;
    }
    public function getArea(){
        return $this->height * $this->width; 
    }
    public function getPirameter(){
        return ($this->height + $this->width)*2; 
    }
}

?>