<?php
include_once('circle.php');
include_once('cylinder.php');

$circle = new Circle(3,'pink');
echo "Chu vi hinh tron: ".$circle->CircleArea().", Mau: ".$circle->getColor()."<br/>";
echo "Dien tich hinh tron: ".$circle->CirclePerimeter().", Mau: ".$circle->getColor()."<br/>";

$cylinder = new Cylinder(3,'orange',4);
echo "The tich hinh tron: ".$cylinder->cylinderVolume().", Mau: ".$cylinder->getColor();
