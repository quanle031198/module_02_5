<?php
include_once('moveablepoint.php');
include_once('point.php');

$point = new Point(2.3,3.4);
// $point->setX(6.9);
// echo $point->getX()."<br/>";
// $point->setY(2.5);
// echo $point->getY()."<br/>";
// $point->setXY(1.0,6.6);
var_dump($point->getXY());
echo"<br/>";
echo $point->toString()."<br/><br/>";

$moveablepoint = new MoveAblePoint(2.1,4.3,5.4,7.0);
// $moveablepoint->setXSpeed(6.9);
// echo $moveablepoint->getXSpeed()."<br/>";
// $moveablepoint->setYSpeed(7.0);
// echo $moveablepoint->getYSpeed()."<br/>";
// $moveablepoint->setSpeed(1.0,6.6);
var_dump($moveablepoint->getSpeed());
echo"<br/>";
echo $moveablepoint->toString()."<br/>";
// echo $moveablepoint->moveAblePoint()."<br/>";

echo $moveablepoint->moveAblePoint();