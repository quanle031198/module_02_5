<?php
include_once('point2d.php');
include_once('point3d.php');

$toado = new Point2D(3.2,1.5);
echo $toado->getX()."<br/>";
echo $toado->getY()."<br/>";
var_dump($toado->getXY());
echo "<br/>";
echo $toado->toString()."<br/><br/>";

$toado1 = new Point3D(3.0,1.6,2.1);
var_dump($toado1->getXYZ() );
echo "<br/>";
echo $toado1->toString() ."<br/>";