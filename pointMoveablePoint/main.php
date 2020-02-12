
<?php 
require "point_class.php";
require "point_moveablePoint_class.php";

$mova = new MovablePoint(4, 5, 6, 7);
$mova2 = new MovablePoint(8, 9, 10, 11);

echo "Move: " . $mova->toString() . "<br/>";
echo "Moves: " . $mova->Move()->toString();

?>