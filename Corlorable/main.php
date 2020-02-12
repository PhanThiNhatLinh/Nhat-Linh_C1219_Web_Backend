<?php 
require "geomeotric.php";
require "colorable.php";
require "rectangle.php";
require "square.php";
$square1 = new Square(50);
$rectangle1 =new Rectangle(10,15); 
$geomeotrics[0]=$square1;
$geomeotrics[1]=$rectangle1;
foreach ($geomeotrics as $geomeotric ){
    echo $geomeotric->getArea(). " and ".$geomeotric->getPirameter()."<br>";
    if ($geomeotric instanceof $square1){
    echo $geomeotric->howToColor()."<br>"; 
    }
}
?>