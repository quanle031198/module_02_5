<?php
class Point2D
{
    protected float $x;
    protected float $y;
    protected $xy = [];
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }
    public function setY($y)
    {
        $this->y = $y;
    }

    public function getXY()
    {
        array_push($this->xy, $this->x, $this->y);
        return $this->xy;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function toString()
    {
        return implode(",", $this->xy);
    }
}
