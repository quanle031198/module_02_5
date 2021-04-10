<?php
include_once 'Shape.php';
class Triangle extends Shape
{
    public float $side1;
    public float $side2;
    public float $side3;
    public float $height;
    public function __construct($name, $side1 = 1.0, $side2 = 1.0, $side3 = 1.0, $height)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->height = $height;
    }
    public function getArea(){
        return "dien tich hinh tam giac: ".(1/2*$this->side1*$this->height);
    }
    public function getPrimeter(){
        return "chu vi hinh tam giac: 3".$this->side1 * $this->side2 * $this->side3;
    }
    public function toString()
    {
        return "canh thu nhat: ".$this->side1."<br/> canh thu 2: ".$this->side2."<br/> canh thu 3: ".$this->side3."<br/> chieu cao: ".$this->height;
    }
}
