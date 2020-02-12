<?php 
require "point2d_class.php"; 
require "point3d_class.php"; 
// $point2d1= new Point2d(5,7);
// // echo $point2d1->setXY(8,9); 
// $array=$point2d1->getXY(); 
// $array[]=5; 
// var_dump($array)."<br>"; 
$point3d1= new Point3d(9,10,11); 
$array2=$point3d1->getXYZ(); 
var_dump($array2); 
?>