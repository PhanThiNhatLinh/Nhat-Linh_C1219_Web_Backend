<?php 
class Square extends Rectangle implements Resizeable {
    
    public function __construct($width)
    {
       parent:: __construct($width,$width);
    }

}
?>