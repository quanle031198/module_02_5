<?php
include_once('point.php');
class MoveAblePoint extends Point
{
    public float $xSpeed;
    public  float $ySpeed;
    public $speed = [];
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }


    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        array_push($this->speed, $this->xSpeed, $this->ySpeed);
        return $this->speed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function toString()
    {
        return "( ".$this->x.", ".$this->y." ), speed = ( ".$this->xSpeed.", ".$this->ySpeed.")";
    }
    public function moveAblePoint(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "toa do sau di chuyen cua x la: ".$this->x.", toa do sau di chuyen cua y la: ".$this->y ;
    }
}
