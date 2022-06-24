<?php
declare(strict_types=1);

class Beverage{

    //properties
    public string $name;
    public string $color;
    public float $price;
    public string $temperature;

    //cunstructor
    public function __construct(string $name, string $color, float $price){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
    }
    // method
    public function getInfo() : string{
        return "this beverage is a $this->name , costs $this->price euro and has a $this->color color.";
    }

}

$cola = new Beverage('Cola', 'black', 2);
echo $cola->getInfo();


