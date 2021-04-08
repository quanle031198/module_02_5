<?php
include_once('point2d.php');
class Point3D extends Point2D
{
    public float $z;
    public $xyz = [];
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getXYZ()
    {
        array_push($this->xyz, parent::getX(), parent::getY(), $this->z);
        return $this->xyz;
    }

    public function setXYZ($x,$y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function toString()
    {
        return implode(",", $this->xyz);
    }
}
