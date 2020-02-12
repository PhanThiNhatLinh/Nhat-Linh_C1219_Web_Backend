<?php 
require "circle_class.php";
require "cylinder_class.php";
$circle1=new Circle(5,"blue");
echo $circle1->toString()."<br>"; 

$cylinder1= new Cylinder(5,"yellow",10);
echo $cylinder1->toString(); 
?>
