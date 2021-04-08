<?php
class Circle{
    protected $radius;
    protected $color;
    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }
    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function CircleArea(){
        return pi() * pow($this->radius, 2);
    }
    public function CirclePerimeter(){
        return pi() * $this->radius * 2;
    }
}
