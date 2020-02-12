<?php 
 require "resizeable.php";
 require "circle.php"; 
 require "rectangle.php";
 require "square.php"; 

$circle1= new Circle(5); 
echo "diện tích hình tròn:";
echo $circle1->getArea()."<br>";
echo "diện tích hình tròn sau khi tăng bán kính lên 5%:"."<br>";
echo $circle1->Resize(5)."<br>".$circle1->getArea()."<br>"; 
echo "diện tích hình tròn sau khi set lại bán kính bằng 6 và tăng bán kính lên 5%"."<br>";
echo $circle1->setRadius(6)."<br>".$circle1->Resize(5)."<br>".$circle1->getArea()."<br>"; 

$rectangle1= new Rectangle(6,7);
echo "diện tích hình chữ nhật:"."<br>";
echo $rectangle1->getArea()."<br>";
echo "diện tích hình chữ nhật sau khi set lại chiều rộng bằng 8 và tăng bán kính lên 5%"."<br>";
echo $rectangle1->setHeight(8)."<br>".$rectangle1->Resize(5)."<br>".$rectangle1->getArea()."<br>";

$square1=new Square(5);
echo "diện tích hình vuông sau khi tăng bán kính lên 5%:"."<br>";
echo $square1->Resize(5)."<br>".$square1->getArea()."<br>"; 
echo "diện tích hình vuông sau khi set lại 1 cạnh bằng 8 và tăng bán kính lên 5%:"."<br>";
echo $square1->setWidth(8)."<br>".$square1->Resize(5)."<br>".$square1->getArea();

?>