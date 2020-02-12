<?php 
class Fan {

   private Const Slow=1;
   private Const Medium=2;
   private Const Fast = 3; 

private $speed= self::Slow;
// lấy giá trị của hằng dùng self::giá trị;
private $on= true; 
private $radius=5; 
private $color= "blue"; 

public function getSpeed(){
  return $this->speed;
}

public function getStatus(){
   return $this->on;
}

public function getRadius(){
   return $this->radius;
}

public function getColor(){
   return $this->color;
}

// phải thêm các hàm getter bởi vì các thuộc tính được modifier là private nên phải public getter để lấy nó ra.
public function setSpeed($speed1){
    switch($speed1){
      case "Medium":
         $this->speed=self::Medium;
      break;
      case "Fast":
         $this->speed=self::Fast;
      break;
      default:
      $this->speed=self::Slow;
    }
   //  đối với speed có 3 trường hợp giá trị truyền vào nên phải dùng swichcase để nó hiểu là mình muốn truyền vào
   // tham số như nào.
 }

 public function setStatus($on){
    $this->on=$on;
 }

 public function setRadius($radius1){
    $this->radius=$radius1;
 }

 public function setColor($color1){
     $this->color=$color1;
 }

public function toString(){
    if($this->on){
       echo "fan is on"."<br>";
       echo "Speed : ".$this->speed ."<br>"; 
       echo "color : ".$this->color."<br>";
       echo "bán kính : ".$this->radius;
} else{
    echo "fan is off"."<br>";
    echo "Speed : ".$this->speed ."<br>"; 
    echo "color :".$this->color."<br>";
    echo "bán kính :".$this->radius;
      }
   }
}

?>