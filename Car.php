<?php
 class Car{
    private $color;
    private $brand;
    private $price;

    public function setColor(){
        return $this->color;
    }

    public function getColor($color)
    {
        $this->color = $color;
        echo("The color of your car is ".$color);
        echo("<br>");
    }
 }
?>