<?php
require "fan_class.php";  
$fan1= new Fan ();
echo $fan1->getSpeed()."<br>".$fan1->getStatus()."<br>". $fan1->getRadius()."<br>".$fan1->getColor(); 
// echo $fan1->getStatus()."<br>"; 
// echo $fan1->getRadius()."<br>"; 
// echo $fan1->getColor(); 
echo $fan1->toString(); 
$fan1->setSpeed("Medium")."<br>"; 
$fan1->setStatus(false)."<br>"; 
$fan1->setRadius(10)."<br>"; 
$fan1->setColor("yellow");
echo $fan1-> toString(); 
?>