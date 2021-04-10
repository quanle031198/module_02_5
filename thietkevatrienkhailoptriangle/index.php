<?php
include_once 'Triangle.php';

$triangle = new Triangle('hinh tam giac',5,1.0,1.0,2);
echo $triangle->getName()."<br/>";
echo $triangle->getArea()."<br/>";
echo $triangle->getPrimeter()."<br/>";
echo $triangle->toString()."<br/>";